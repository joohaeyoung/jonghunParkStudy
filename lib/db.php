<?php

function getConn(){

	static $conn= null;
	
	$dsn = 'mysql:dbname=test;host=127.0.0.1;';
	$user = 'root';
	$password = '1234';
	
	if( $conn == null ) {
	
		$conn = new PDO($dsn, $user, $password);
		$conn->exec("set names utf8");
	
	}
	
	return $conn;

}

function query($str){

	return getConn() -> query($str);

}
?>