<?php

session_start();

function isLogged(){
    return (bool)$_SESSION['logged_id'];
}

//사용자 아이디가 있는지 없는지 확인.
function isExistUser($id,$pw){
    $str= sprintf("select count(`id`) AS `exist` from `user` where `user_id` = '%s' AND user_pw = '%s' ",$id,$pw );

    $exist= query($str)->fetch();

    return $exist['exist'] > 0 ;
}

//실제로 로그인을 시켜주는 함수
function doLogin($id){

    $_SESSION['logged_id']=$id;
}

function doLogout(){
    //$_SESSION['logged_id']=null;
    //unset($_SESSION['logged_id']);
    session_unset(); //— 모든 세션 변수 해제, 이 방법이 매우 좋다!
}

function getLoggedUserInfo($field){

    $user = selectUserByUserId($_SESSION['logged_id']);//한행다드러옴.
    return $user[$field];//그것만뽑아옴.

}