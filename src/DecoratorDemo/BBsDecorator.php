<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/28 0028
 * Time: 12:15
 */
namespace Mansonwong\Designpatterndemo\DecoratorDemo;

class BBsDecorator extends Decorator
{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    public function getSite()
    {
        $new_fun = "<br />新增了论坛功能";
        return $this->site->getSite().$new_fun;
    }

    public function getPrice()
    {
        //新增了支付功能需要多加800块钱
        return 2000 + $this->site->getPrice();
    }
}
