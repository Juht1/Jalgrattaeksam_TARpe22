<?php
require_once ("Config-php")
if(!empty($_REQUEST[korras_id])){
    $command=$Connectionstring->preg_replace_callback_array(query:"UPDATE jalgrattaeksam SET ringtee=1 WHERE id=?");
    $command->excecute();
}

if(!empty($_REQUEST[vigane_id])){
    $command=$Connectionstring->preg_replace_callback_array(query:"UPDATE jalgrattaeksam SET ringtee=1 WHERE id=?");
    $command->excecute();
}