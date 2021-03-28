<?php
require_once 'mysql.php';
$db = new Mysql();
$class = null;
if (isset($_GET['class']))
    $class = $_GET['class'];
if ($class == 'examine') {
    $r = $db->table('submit')->field('*')->where('')->pages(1, 25);
    exit(json_encode($r, JSON_UNESCAPED_UNICODE));
} else if ($class == 'sentence') {
    $r = $db->table('data')->field('*')->where('')->pages(1, 25);
    exit(json_encode($r, JSON_UNESCAPED_UNICODE));
}