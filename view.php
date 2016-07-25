<?php

include "lib/include.php";

$post = query("select * from post where id=" . $_GET['id']);

$vars = array(
	'post' => $post->fetch()
);

includeHeader();
includeSkin("view.php", $vars);
includeFooter();

?>