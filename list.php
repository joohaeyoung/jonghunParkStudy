<?php

include "lib/include.php";

$list = query("select*from post");
$vars = array(
	'list'=> $list
);


//ㅎㅎㅎㅎㅎ
includeHeader();
includeSkin("list.php", $vars );
includeFooter();

?>