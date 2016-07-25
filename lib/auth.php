<?php

function isLogged(){
    return false;
}

function getUserInfo($field){
    $user= array(
        'name' => '해용'
    );
    return $user[$field];
}