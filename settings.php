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
 * @package   theme_cosmubo
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Custom CSS file.
    $name = 'theme_cosmubo/customcss';
    $title = get_string('customcss', 'theme_cosmubo');
    $description = get_string('customcssdesc', 'theme_cosmubo');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
//    $name = 'theme_cosmubo/footnote';
  //  $title = get_string('footnote', 'theme_cosmubo');
   // $description = get_string('footnotedesc', 'theme_cosmubo');
   // $default = '';
   // $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
   // $setting->set_updatedcallback('theme_reset_all_caches');
   // $settings->add($setting);

 // Background image setting.
    $name = 'theme_cosmubo/backgroundimage';
    $title = get_string('backgroundimage', 'theme_more');
    $description = get_string('backgroundimage_desc', 'theme_more');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

}