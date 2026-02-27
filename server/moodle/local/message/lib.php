<?php

/**
 * Set Mode.
 *
 * @package    local_message
 * @copyright  2026 Irfan Farooq
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @var stdClass $plugin
 */

function local_message_before_footer(){
    // echo '<div class="alert alert-info" role="alert">This is a message from the local_message plugin!</div>';

    echo \core\notification::add('This is a message from the local_message plugin!', \core\notification::SUCCESS);

}