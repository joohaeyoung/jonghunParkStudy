<?php
/*****************컨트롤러*********************/
/*-- 컨트롤러는 모델와 뷰사이의 다리역할 --*/

include "lib/include.php";

$list = selectAllBySortedDesc('post','id');

$vars = array(
	'list'=> $list
);

includeHeader();
includeSkin("list.php", $vars);
includeFooter();

?>