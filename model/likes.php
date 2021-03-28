<?php
require_once 'mysql.php';
$db = new Mysql();
$id = $_GET['id'];
$r = $db->table('data')->field('likes')->where("id=$id")->item();
$r = $r['likes'];
$db->table('data')->where("id=$id")->update(array('likes', $r + 1));
exit('谢谢哦');