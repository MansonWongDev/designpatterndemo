<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/25 0025
 * Time: 18:16
 */
namespace Mansonwong\Designpatterndemo\FactoryDemo;

class PDOFactory implements Factory
{

    protected static $ins = null;

    public static function createDb()
    {
        if (!self::$ins){
            self::$ins =  new PDODb();
        }
        return self::$ins;
    }
    final function __construct()
    {
    }
}