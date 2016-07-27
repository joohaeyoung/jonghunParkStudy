<?php

include "lib/include.php";

if( isExistUser( $_POST['user_id'], $_POST['user_pw'] ) ){

	doLogin( $_POST['user_id'] );

    header('location:list.php');
}


else {

 header('location:error.php?msg=로그인실패!');

}

?>