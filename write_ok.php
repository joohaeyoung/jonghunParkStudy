<?php

include "lib/include.php";

//메모장의 계층 구조다.!
move_uploaded_file($_FILES['file_upload']['tmp_name'], 'upload_file/'.$_FILES['file_upload']['name']);

insert('post', array(
    'title' => $_POST['title'],
    'writer' => $_POST['writer'],
    'content' => $_POST['content']
));

insert('file',array(
    'file_name' => $_FILES['file_upload']['name'],
    'post_id' => getConn()->lastInsertId()
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




