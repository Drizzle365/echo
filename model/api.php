<?php
require_once 'mysql.php';
$type = null;
if (isset($_GET['type']))
    $type = $_GET['type'];
$db = new Mysql();
$data = $db->table('data')->field('*')->where('')->item();
if ($type == 'text')
    exit($data['content']);
else
    echo(json_encode($data, JSON_UNESCAPED_UNICODE));