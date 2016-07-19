<?php

include "lib/dp.php";

include "lib/skin.php";

$list = query("select*from post");

$vars = array(

	'list'=> $list
);

includeHeader();
includeSkin("list.php", $vars );
includeFooter();





?>

<?

/*
Model			DB
View			Skin
Controller		조립하는놈
*/

?>

