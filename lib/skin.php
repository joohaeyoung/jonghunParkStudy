<?php

$skinPath="E:\\APM_Setup\\htdocs\\park_study\\";

function includeHeader() {
	includeSkin('layout/head.php');
	//include "../skin/layout/head.php";
}

function includeFooter() {
	includeSkin('layout/foot.php');
	//include "../skin/layout/foot.php";
}

//이 함수를 호출하면 include 된 파일을 포함할수 있습.
function includeSkin($file, $vars = null) {
	include $skinPath."skin/".$file;
}
