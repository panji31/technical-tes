<?php
function isPasswordValid($data){
    $uppercase = preg_match('/[A-Z]/', $data);
    $lowercase = preg_match('/[a-z]/', $data);
    $number    = preg_match('/[0-9]/', $data);
    $character = preg_match('/[\w\s\.-]/', $data);

    if(!$character|!$uppercase || !$lowercase || !$number || strlen($data)<8){
        return false;
    }else{
        return true;
    }
}
isPasswordValid('SUper&&4');
