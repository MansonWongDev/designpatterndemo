<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/20 0020
 * Time: 12:06
 */
namespace Mansonwong\Designpatterndemo;

interface Db
{
    public function conn($host,$name,$psw,$port,$dbname);
    public function close();
    public function query($query);

}