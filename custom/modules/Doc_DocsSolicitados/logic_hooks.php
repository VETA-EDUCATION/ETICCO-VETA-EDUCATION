<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
$hook_version = 1;

//
// This is where all the logic hooks tie into
$hook_array = Array();

//
// This is the 'before_save' event that we want to tie into
$hook_array['after_save'] = Array();


//
// This is my custom logic hook to add a URL to the Case Description
// It is set to fire in the second position, after the built-in activity happens
$hook_array['after_save'][] = Array(5, 'Modify user', 'custom/modules/Doc_DocsSolicitados/modifyUser.php','modifyUserClass', 'modifyUser');

?>