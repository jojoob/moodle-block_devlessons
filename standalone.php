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
 * @package    block_devlessons
 * @copyright  2017 sudile GbR (http://www.sudile.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Johannes Burk <johannes.burk@sudile.com>
 */

require_once('../../config.php');

$context = context_system::instance();
$url = new moodle_url('/blocks/devlessons/standalone.php');

// Set the page's context, url and layout is required.
$PAGE->set_context($context);
$PAGE->set_url($url);
$PAGE->set_pagelayout('standard');
// A title and heading are optional.
$PAGE->set_title(get_string('standalonepage', 'block_devlessons'));
$PAGE->set_heading(get_string('standalonepage', 'block_devlessons'));

// Output starts here.
echo $OUTPUT->header();

echo $OUTPUT->heading(get_string('standalonepageheading', 'block_devlessons'));
echo html_writer::tag('p', get_string('standalonepagecontent', 'block_devlessons'));

// Output ends here.
echo $OUTPUT->footer();
