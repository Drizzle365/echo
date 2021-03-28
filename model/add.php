<?php
require_once 'mysql.php';
if (!isset($_POST['content']))
    exit('未检测到数据');
$content = $_POST['content'];
$type = $_POST['type'];
$from_where = 'None';
$from_who = 'None';
if (isset($_POST['from_where']))
    $from_where = $_POST['from_where'];
if (isset($_POST['from_who']))
    $from_who = $_POST['from_who'];
$db = new Mysql();
$data = array('content' => $content, 'type' => $type, 'from_where' => $from_where, 'from_who' => $from_who,'likes'=>0);
$temp = $db->table('data')->field('*')->where("content='{$content}'")->item();
if (isset($temp['content']))
    exit("已存在");
$id = $db->table('data')->insert($data);
exit("插入成功");

