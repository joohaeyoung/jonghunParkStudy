<?php

include "lib/include.php";

$list = query("select*from post");
$vars = array(
	'list'=> $list
);

//ㄴㅇㄹㅇ너리ㅏㅇ너ㅏ러니

//ㅎㅎㅎㅎㅎ
includeHeader();
includeSkin("list.php", $vars );
includeFooter();

?>