<?php
require_once 'mysql.php';
$db = new Mysql();
$id = $_GET['id'];
$r = $db->table('data')->field('likes')->where("id=$id")->item();
$r['likes'] = $r['likes'] + 1;
$db->table('data')->where("id=$id")->update($r);
exit('谢谢哦');