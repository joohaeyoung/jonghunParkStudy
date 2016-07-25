<?php

include "lib/include.php";

insert('post', array(
    'title' => $_POST['title'],
    'writer' => $_POST['writer'],
    'content' => $_POST['content']
));

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

