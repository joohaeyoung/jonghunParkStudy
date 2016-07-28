<?php

include "lib/include.php";

$post = selectById('post', $_GET['id']) ;
$file = query('SELECT * FROM file WHERE post_id = '.$_GET['id']);

$vars = array(
	'post' => $post->fetch(),
	'file' => $file->fetch()
);

includeHeader();
includeSkin("view.php", $vars);
includeFooter();

?>

