<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/25 0025
 * Time: 18:21
 */


use Mansonwong\Designpatterndemo\MysqlFactory;
use Mansonwong\Designpatterndemo\PDOFactory;

require_once __DIR__ . './../vendor/autoload.php';

/************** 客户端调用 ************/
$res = PDOFactory::createDb();
$db = $res->conn('127.0.0.1','root','wwj449','3306','sjms');
$r = $res->query("select * from feedback");
var_dump($r);

$r222 = $res->query("select * from feedback where id = 2");
var_dump($r222);

$res3 = PDOFactory::createDb();
//验证单例模式的效果
if ($res===$res3){
    echo '相等，单例没问题！';
}else{
    echo '不等';
}


$res2 = MysqlFactory::createDb();
$db2 = $res2->conn('127.0.0.1','root','wwj449','3306','sjms');
$r2 = $res2->query("select * from feedback");
var_dump($r2);


