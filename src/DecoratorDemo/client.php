<?php


use Mansonwong\Designpatterndemo\DecoratorDemo\BasicSite;
use Mansonwong\Designpatterndemo\DecoratorDemo\BBsDecorator;
use Mansonwong\Designpatterndemo\DecoratorDemo\IComponent;
use Mansonwong\Designpatterndemo\DecoratorDemo\PayDecorator;
use Mansonwong\Designpatterndemo\DecoratorDemo\VideoDecorator;

/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/28 0028
 * Time: 12:21
 */


/*
 * Client类并不是这个设计模式的一部分,
 * 但是正确使用Client类至关重要.每个装饰器在实例化时"包装"组件,
 * 不过, 首先必须创建一个要包装的对象, 这里是BasicSite类实例
 */
class Client
{
    private $mysite;
    public function __construct()
    {
        $this->mysite = new BasicSite();
        $this->mysite = $this->WrapComponent($this->mysite);
        $last_site_desc = $this->mysite->getSite();
        $last_site_price = $this->mysite->getPrice();
        echo "网站服务：$last_site_desc ；最终价格：￥ $last_site_price";
    }

    private function WrapComponent(IComponent $component)
    {
        $component = new VideoDecorator($component);
        $component = new PayDecorator($component);
        $component = new BBsDecorator($component);
        return $component;
    }
}

$worker = new Client();