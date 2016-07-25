<?php

function getConn() {
    static $conn = null;

    $dsn = 'mysql:dbname=test;host=localhost;charset=utf8';
    $user = 'root';
    $password = '1234';

    if($conn == null)
        $conn = new PDO($dsn, $user, $password);

    return $conn;
}

function query($str) {
    return getConn() -> query($str);
}

function selectAll($table) {
    return query('select * from '.$table);
}

function selectAllBySortedDesc($table, $field) {
    return query('select * from '.$table.' ORDER BY '.$field.' DESC');
}

function selectById($table, $id) {
    return query('select * from '.$table.' WHERE id = '.$id);
}

/*
    $row = array(
        'title' => '테스트 타이틀',
        'content' => '내용물..',
        'writer' => '박종훈'
    );
*/
function insert($table, $row) {
    $keys = '';
    $values = '';
    $i = 0;

    foreach($row as $key => $value) {
        $isFinish = (count($row) == ++$i);

        $keys .= $key.(!$isFinish ? ', ' : '');
        $values .= '"'.$value.'"'.(!$isFinish ? ', ' : '');
    }

    return query('INSERT INTO '.$table.' ('.$keys.') VALUES ('.$values.')');
}

