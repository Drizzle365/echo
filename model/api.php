<?php
require_once 'mysql.php';
$db=new Mysql();
$data=$db->table('data')->field('*')->where('Id>-1')->item();
echo(json_encode($data));