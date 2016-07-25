<?php

include "lib/include.php";

$post = selectById('post', $_GET['id']) ;

$vars = array(
	'post' => $post->fetch()
);

includeHeader();
includeSkin("view.php", $vars);
includeFooter();

?>

