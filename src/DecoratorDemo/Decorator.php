<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/28 0028
 * Time: 12:09
 */
namespace Mansonwong\Designpatterndemo\DecoratorDemo;

abstract class Decorator extends IComponent
{
    /*
    任务是维护Component的引用
    继承getSite()和getPrice()
    因为仍然是抽象类,所以不需要实现父类任何一个抽象方法
    */
}