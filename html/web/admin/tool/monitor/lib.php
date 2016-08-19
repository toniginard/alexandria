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
 * This page lists public api for tool_monitor plugin.
 *
 * @package    tool_monitor
 * @copyright  2014 onwards Ankit Agarwal <ankit.agrr@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

/**
 * This function extends the navigation with the tool items
 *
 * @param navigation_node $navigation The navigation node to extend
 * @param stdClass        $course     The course to object for the tool
 * @param context         $context    The context of the course
 */
function tool_monitor_extend_navigation_course($navigation, $course, $context) {
    //XTEC ************ AFEGIT - To let access only to xtecadmin user
    //2015.05.19 @pferre22
    if (!get_protected_agora()) {
        return;
    }
    //************ FI
    if (has_capability('tool/monitor:managerules', $context) && get_config('tool_monitor', 'enablemonitor')) {
        $url = new moodle_url('/admin/tool/monitor/managerules.php', array('courseid' => $course->id));
        $settingsnode = navigation_node::create(get_string('managerules', 'tool_monitor'), $url, navigation_node::TYPE_SETTING,
                null, null, new pix_icon('i/settings', ''));
        $reportnode = $navigation->get('coursereports');

        if (isset($settingsnode) && !empty($reportnode)) {
            $reportnode->add_node($settingsnode);
        }
    }
}

/**
 * This function extends the navigation with the tool items
 *
 * @param navigation_node $navigation The navigation node to extend
 * @param stdClass        $course     The course to object for the tool
 * @param context         $context    The context of the course
 */
function tool_monitor_extend_navigation_frontpage($navigation, $course, $context) {

    //XTEC ************ AFEGIT - To let access only to xtecadmin user
    //2015.05.19 @pferre22
    if (!get_protected_agora()) {
        return;
    }
    //************ FI
    if (has_capability('tool/monitor:managerules', $context)) {
        $url = new moodle_url('/admin/tool/monitor/managerules.php', array('courseid' => $course->id));
        $settingsnode = navigation_node::create(get_string('managerules', 'tool_monitor'), $url, navigation_node::TYPE_SETTING,
                null, null, new pix_icon('i/settings', ''));
        $reportnode = $navigation->get('frontpagereports');

        if (isset($settingsnode) && !empty($reportnode)) {
            $reportnode->add_node($settingsnode);
        }
    }
}

/**
 * This function extends the navigation with the tool items for user settings node.
 *
 * @param navigation_node $navigation  The navigation node to extend
 * @param stdClass        $user        The user object
 * @param context         $usercontext The context of the user
 * @param stdClass        $course      The course to object for the tool
 * @param context         $coursecontext     The context of the course
 */
function tool_monitor_extend_navigation_user_settings($navigation, $user, $usercontext, $course, $coursecontext) {
    global $USER, $SITE;
    //XTEC ************ AFEGIT - To let access only to xtecadmin user
    //2015.05.19 @pferre22
    if (!get_protected_agora()) {
        return;
    }
    //************ FI

    // Don't show the setting if the event monitor isn't turned on. No access to other peoples subscriptions.
    if (get_config('tool_monitor', 'enablemonitor') && $USER->id == $user->id) {
        // Now let's check to see if the user has any courses / site rules that they can subscribe to.
        if ($courses = tool_monitor_get_user_courses()) {
            $url = new moodle_url('/admin/tool/monitor/index.php');
            $subsnode = navigation_node::create(get_string('managesubscriptions', 'tool_monitor'), $url,
                    navigation_node::TYPE_SETTING, null, 'monitor', new pix_icon('i/settings', ''));

            if (isset($subsnode) && !empty($navigation)) {
                $navigation->add_node($subsnode);
            }
        }
    }
}

/**
 * Get a list of courses and also include 'Site' for site wide rules.
 *
 * @return array|bool Returns an array of courses or false if the user has no permission to subscribe to rules.
 */
function tool_monitor_get_user_courses() {
    $orderby = 'visible DESC, sortorder ASC';
    $options = array();
    if (has_capability('tool/monitor:subscribe', context_system::instance())) {
        $options[0] = get_string('site');
    }
    if ($courses = get_user_capability_course('tool/monitor:subscribe', null, true, 'fullname, visible', $orderby)) {
        foreach ($courses as $course) {
            $coursectx = context_course::instance($course->id);
            if ($course->visible || has_capability('moodle/course:viewhiddencourses', $coursectx)) {
                $options[$course->id] = format_string($course->fullname, true, array('context' => $coursectx));
            }
        }
    }
    // If there are no courses and there is no site permission then return false.
    if (count($options) < 1) {
        return false;
    } else {
        return $options;
    }
}
