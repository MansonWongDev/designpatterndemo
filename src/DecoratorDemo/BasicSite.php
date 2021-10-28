<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/28 0028
 * Time: 12:11
 */
namespace Mansonwong\Designpatterndemo\DecoratorDemo;

//网站起步价，基础价，基础网站 对象
class BasicSite extends IComponent
{
    public function __construct()
    {
        $this->site = "基础网站服务";
    }
    public function getSite()
    {
        return $this->site;
    }

    public function getPrice()
    {
        //基础价 1200  起步价
        return 1200;
    }
}