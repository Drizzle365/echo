<?php
require_once 'mysql.php';
$encode = null;
if (isset($_GET['encode']))
    $encode = $_GET['encode'];
$db = new Mysql();
if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $data = $db->table('data')->field('*')->where("type='{$type}'")->item();
} else
    $data = $db->table('data')->field('*')->where('')->item();
if ($encode == 'text') {
    exit($data['content']);
} else {
    echo(json_encode($data, JSON_UNESCAPED_UNICODE));
}