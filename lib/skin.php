<?php

$skinPath="E:\\APM_Setup\\htdocs\\park_study\\";


function includeHeader(){

	includeSkin('layout/head.php');
	//include "../skin/layout/head.php";

}

function includeFooter(){

	includeSkin('layout/foot.php');
	//include "../skin/layout/foot.php";
}

function includeSkin($file , $vars = null){

	include $skinPath."skin/".$file;
}



