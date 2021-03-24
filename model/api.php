<?php
require_once 'mysql.php';
$encode = null;
if (isset($_GET['encode']))
    $encode = $_GET['encode'];
$db = new Mysql();
$data = $db->table('data')->field('*')->where('')->item();
if ($encode == 'text')
    exit($data['content']);
else
    echo(json_encode($data, JSON_UNESCAPED_UNICODE));