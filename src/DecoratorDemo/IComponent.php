<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/28 0028
 * Time: 12:06
 */
namespace Mansonwong\Designpatterndemo\DecoratorDemo;

abstract class IComponent
{
    protected $site;
    abstract public function  getSite();
    abstract public function getPrice();
}


