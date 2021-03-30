<?php
require_once 'mysql.php';
if (!isset($_POST['id']))
    exit('未检测到数据');
$id = $_POST['id'];
$db = new Mysql();
$temp = $db->table('submit')->field('content,type,from_where,from_who')->where("id={$id}")->item();
$temp2 = $db->table('data')->field('*')->where("content='{$temp['content']}'")->item();
$temp['likes'] = 0;
if (isset($temp2['content'])) {
    $db->table('submit')->where("id={$id}")->delete();
    exit("已存在");
} else {
    $db->table('data')->insert($temp);
    $db->table('submit')->where("id={$id}")->delete();
    exit("成功");
}


