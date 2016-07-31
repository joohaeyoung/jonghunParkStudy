<?php

function getConn() {
    static $conn = null;
    
    $dsn = 'mysql:dbname=test;host=localhost;charset=utf8';
    $user = 'root';
    $password = '1234';

    if($conn == null)
        $conn = new PDO($dsn, $user, $password);

     $conn->exec("set names utf8");

    
    return $conn;
}

function query($str) {
    return getConn() -> query($str);
}

function selectAll($table) {
    $str = sprintf('select * from %s', $table);
    
    return query($str);
}

function selectAllBySortedDesc($table, $field) {
    $str = sprintf('select * from %s ORDER BY %s DESC', $table, $field);
    
    return query($str);
}

function selectById($table, $id) {
    $str = sprintf('select * from %s WHERE id = %s', $table, $id);
    
    return query($str);
}

function selectUserByUserId($user_id){

    $str = sprintf("select * from user WHERE user_id='%s'" ,$user_id);
    return query($str)->fetch();
}

/*
    $row = array(
        'title' => '테스트 타이틀',
        'content' => '내용물..',
        'writer' => '박종훈'
    );
*/
function insert($table, $row) {
    /*
    $keys = '';
    $values = '';
    $i = 0;
    
    foreach($row as $key => $value) {
        $isFinish = (count($row) == ++$i);
        
        $keys .= $key.(!$isFinish ? ', ' : '');
        $values .= '"'.$value.'"'.(!$isFinish ? ', ' : '');
    }
    */
    
    $keys = implode(',', array_keys($row));
    $values = implode('","', $row);
    
    $str = sprintf('INSERT INTO %s (%s) VALUES ("%s")', $table, $keys, $values);
    
    return query($str);
}