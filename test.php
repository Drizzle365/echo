<?php
require_once 'model/mysql.php';
$db = new Mysql();
for ($i = 1; $i <= 20; $i++) {
    $content = file_get_contents("https://v1.hitokoto.cn/?encode=text");
    $data = array('content' => $content, 'class' => 0);
    $id = $db->table('data')->insert($data);
    sleep(1);
    print ('正在插入第' . $i . '条数据' . "\n");
}