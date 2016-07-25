<?php

include "lib/include.php";

$title = $_POST['title'];
$writer = $_POST['writer'];
$content = $_POST['content'];

query(" INSERT INTO `post` ( `title`, `content`, `writer`) VALUES ( '$title', '$writer', '$content' )");

//redirection("list.php");
header('location: list.php');

?>



<?php
/*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    " " 해석
    ' ' 그대로.
*/
?>

