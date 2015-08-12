<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Bitcoin enrolment plugin - enrolment form.
 *
 * @package    enrol_bitcoin
 * @copyright  2015 Dualcube, Moumita Ray, Parthajeet Chakraborty
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once("coinbase-sdk/lib/Coinbase.php");
GLOBAL $SESSION;

$apikey = $this->get_config('apikey');
$apisecret = $this->get_config('apisecret');
$clientid = $this->get_config('clientid');
$clientsecret = $this->get_config('clientsecret');
$redirecturi = $this->get_config('redirecturi');
$invoice = date('YmdHis');

$SESSION->sequence = $sequence = rand(1, 1000);
$SESSION->timestamp = $timestamp = time();
$hash = md5($sequence.$timestamp);

$custom = $instance->courseid.'-'.$USER->id.'-'.$instance->id.'-'.$context->id.'-'.$hash;
$description = $instancename.' '.get_string("cost").': '.$instance->currency.' '.$localisedcost;
?>
<div align="center">
<p>This course requires a payment for entry.</p>
<p><b><?php echo $instancename; ?></b></p>
<p><b><?php echo get_string("cost").": {$instance->currency} {$localisedcost}"; ?></b></p>
<p>&nbsp;</p>
<p><img width="200" alt="Bitcoin" src="<?php echo $CFG->wwwroot; ?>/enrol/bitcoin/pix/bitcoin-logo.png" /></p>
<p>&nbsp;</p>
<p>
<?php
$code = optional_param('code', null, PARAM_RAW);
$coinbaseoauth = new Coinbase_OAuth($clientid, $clientsecret, $redirecturi);
$oauthurl = $coinbaseoauth->createAuthorizeUrl("user+balance");
$token = '';

$SESSION->callback = $CFG->wwwroot.'/enrol/index.php?id='.$instance->courseid;
if (!empty($code)) {
    $post = "grant_type=authorization_code&code=".$code."&redirect_uri=".$redirecturi.
    "&client_id=".$clientid."&client_secret=".$clientsecret;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
    if (get_config('enrol_bitcoin', 'checkproductionmode') == 1) {
        curl_setopt($curl, CURLOPT_URL, 'https://coinbase.com/oauth/token');
    } else {
        curl_setopt($curl, CURLOPT_URL, 'https://sandbox.coinbase.com/oauth/token');
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $statuscode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($response === false) {
        $error = curl_errno($curl);
        $message = curl_error($curl);
        echo "<p>Error : Could not get tokens - network error " . $message . " (" . $error . ")! Please try again.</p>";
        echo '<a href="'.$oauthurl.'">
        <img width="200" alt="Bitcoin" src="'.$CFG->wwwroot.'/enrol/bitcoin/pix/connect-bitcoin.png"
        style="border:1px solid #000" />
        </a>';
        curl_close($curl);
    }
    if ($statuscode == 200) {
        try {
            $json = json_decode($response);
            $token = $json->access_token;
        } catch (Exception $e) {
            echo "<p>Error : Could not get tokens - JSON error : ". $statuscode."! Please try again.</p>";
            echo '<a href="'.$oauthurl.'">
            <img width="200" alt="Bitcoin" src="'.$CFG->wwwroot.'/enrol/bitcoin/pix/connect-bitcoin.png"
            style="border:1px solid #000" />
            </a>';
        }
        if (!empty($token)) {
            $coinbase = Coinbase::withApiKey($apikey, $apisecret);
            $response = $coinbase->createButton($coursefullname, $localisedcost, $instance->currency, $custom, array(
                        "description" => $description,
                        "subscription" => false,
                        "callback_url" => $CFG->wwwroot.'/enrol/bitcoin/ipn.php',
                        "success_url" => $CFG->wwwroot.'/enrol/bitcoin/ipn.php',
                        "cancel_url" => $CFG->wwwroot.'/enrol/bitcoin/return.php',
                        "info_url" => $CFG->wwwroot.'/enrol/bitcoin/ipn.php',
                        "include_email" => false
                    ));
            echo $response->embedHtml;
        }
    } else {
        echo "<p>Error : Could not get tokens - code : " . $statuscode . "! Please try again.</p>";
        echo '<a href="'.$oauthurl.'">
        <img width="200" alt="Bitcoin" src="'.$CFG->wwwroot.'/enrol/bitcoin/pix/connect-bitcoin.png"
        style="border:1px solid #000" />
        </a>';
    }
    curl_close($curl);
} else {
    echo '<a href="'.$oauthurl.'">
    <img width="200" alt="Bitcoin" src="'.$CFG->wwwroot.'/enrol/bitcoin/pix/connect-bitcoin.png"
    style="border:1px solid #000" />
    </a>';
}
?>
</p>
</div>
