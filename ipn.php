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
 * Listens for Instant Payment Notification from Authorize.net
 *
 * This script waits for Payment notification from Authorize.net, 
 * then it sets up the enrolment for that user.
 *
 * @package    enrol_bitcoin
 * @copyright  2015 Dualcube, Moumita Ray, Parthajeet Chakraborty
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Disable moodle specific debug messages and any errors in output,
// comment out when debugging or better look into error log!
define('NO_DEBUG_DISPLAY', true);

require("../../config.php");
require_once("lib.php");
require_once($CFG->libdir.'/eventslib.php');
require_once($CFG->libdir.'/enrollib.php');
require_once($CFG->libdir . '/filelib.php');

$responsearray = clean_param_array($_GET['order'], PARAM_RAW, true);

if (empty($responsearray)) {
    print_error("Sorry, you can not use the script that way."); die;
}

$arraycourseinstance = explode('-', $responsearray['custom']);
if (empty($arraycourseinstance) || count($arraycourseinstance) < 5) {
    print_error("Received an invalid payment notification!! (Fake payment?)"); die;
}

if (! $user = $DB->get_record("user", array("id" => $arraycourseinstance[1]), MUST_EXIST)) {
    print_error("Not a valid user id"); die;
}

if (! $course = $DB->get_record("course", array("id" => $arraycourseinstance[0]), MUST_EXIST)) {
    print_error("Not a valid course id"); die;
}

if (! $context = context_course::instance($arraycourseinstance[0], IGNORE_MISSING)) {
    print_error("Not a valid context id"); die;
}

if (! $plugininstance = $DB->get_record("enrol", array("id" => $arraycourseinstance[2], "status" => 0))) {
    print_error("Not a valid instance id"); die;
}

$checkhash = md5($SESSION->sequence.$SESSION->timestamp);
if ($arraycourseinstance[4] != $checkhash) {
    print_error("We can't validate your transaction. Please try again!!"); die;
}

$enrolbitcoin = $userenrolments = $roleassignments = new stdClass();

$enrolbitcoin->item_name = $responsearray['button']['name'];
$enrolbitcoin->courseid = $arraycourseinstance[0];
$enrolbitcoin->userid = $arraycourseinstance[1];
$enrolbitcoin->instanceid = $arraycourseinstance[2];
$enrolbitcoin->amount = $responsearray['total_native']['cents'];
$enrolbitcoin->currency = $responsearray['total_native']['currency_iso'];
$enrolbitcoin->payment_status = $responsearray['status'];
$enrolbitcoin->transactionid = $responsearray['transaction']['id'];
$enrolbitcoin->timeupdated = time();
/* Inserting value to enrol_bitcoin table */
$ret1 = $DB->insert_record("enrol_bitcoin", $enrolbitcoin, false);
if ($responsearray['status'] == 'completed') {
    /* Inserting value to user_enrolments table */
    $userenrolments->status = 0;
    $userenrolments->enrolid = $arraycourseinstance[2];
    $userenrolments->userid = $arraycourseinstance[1];
    $userenrolments->timestart = time();
    $userenrolments->timeend = 0;
    $userenrolments->modifierid = 2;
    $userenrolments->timecreated = time();
    $userenrolments->timemodified = time();
    $ret2 = $DB->insert_record("user_enrolments", $userenrolments, false);
    /* Inserting value to role_assignments table */
    $roleassignments->roleid = 5;
    $roleassignments->contextid = $arraycourseinstance[3];
    $roleassignments->userid = $arraycourseinstance[1];
    $roleassignments->timemodified = time();
    $roleassignments->modifierid = 2;
    $roleassignments->component = '';
    $roleassignments->itemid = 0;
    $roleassignments->sortorder = 0;
    $ret3 = $DB->insert_record('role_assignments', $roleassignments, false);
}
echo '<script type="text/javascript">
     window.location.href="'.$CFG->wwwroot.'/enrol/bitcoin/return.php?id='.$arraycourseinstance[0].'";
     </script>';
die;