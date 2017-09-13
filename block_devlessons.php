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

defined('MOODLE_INTERNAL') || die();

class block_devlessons extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_devlessons');
    }

    public function get_content() {
        global $USER;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content =  new stdClass;
        $this->content->text = html_writer::tag('p', get_string('blockcontent', 'block_devlessons'));
        $this->content->text .= html_writer::tag('p', get_string('greeting', 'block_devlessons', fullname($USER)));
        $this->content->footer = html_writer::tag('p', get_string('blockfooter', 'block_devlessons'));

        return $this->content;
    }
}
