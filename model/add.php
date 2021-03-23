<?php
require_once 'mysql.php';
if (!isset($_GET['content']))
    exit('未检测到数据');
$content = $_GET['content'];
$class = $_GET['class'];
$db = new Mysql();
$data = array('content' => $content, 'class' => $class);
$id = $db->table('data')->insert($data);
exit("插入成功");

