<?php
if (!isset($_POST['content']))
    exit('未检测到表单提交');
require_once 'mysql.php';
$from_who = 'None';
$from_where = 'None';
$content = $_POST['content'];
$type = $_POST['type'];
$email = $_POST['email'];
if (isset($_POST['from_where']))
    $from_where = $_POST['from_where'];
if (isset($_POST['from_who']))
    $from_who = $_POST['from_who'];
$db = new Mysql();
$data = array('content' => $content, 'type' => $type, 'from_where' => $from_where, 'from_who' => $from_who, 'email' => $email);
$db->table('submit')->insert($data);
exit('投递成功！');

