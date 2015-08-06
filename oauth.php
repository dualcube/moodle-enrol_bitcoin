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
 * Bitcoin enrolment plugin.
 *
 * @package    enrol_bitcoin
 * @copyright  2015 Dualcube, Moumita Ray, Parthajeet Chakraborty
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
GLOBAL $SESSION, $CFG;
$code = optional_param('code', null, PARAM_RAW);
if (!empty($code)) {
    $code = strip_tags($code);
    $code = filter_var($code, FILTER_SANITIZE_STRING);
    header("location: ".$SESSION->callback.'&code='.$code); die;
} else {
    header("location: ".$SESSION->callback.'&code=0'); die;
}
