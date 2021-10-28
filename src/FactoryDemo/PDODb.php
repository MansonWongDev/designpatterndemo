<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/25 0025
 * Time: 17:47
 */
namespace Mansonwong\Designpatterndemo\FactoryDemo;

class PDODb implements Db{
    protected $con=null;

    public function conn($host,$user,$password,$port,$dbname)
    {
        if (!$this->con){

            $dsn= "mysql:dbname=$dbname;host=$host";

            try {
                $params = [
                    \PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8", //设置编码
                    \PDO::ATTR_EMULATE_PREPARES   => false, //使用预处理
                ];
                $this->con = new \PDO($dsn, $user, $password, $params);

            } catch (\PDOException $e) {
                throw new \Exception($e->getMessage());
            }

        }
        return $this->con;
    }
    public function query($query)
    {
        //查询多条数据
        $sth = $this->con->prepare($query);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_ASSOC); //有多种方式可以设置返回的值
    }

    public function close()
    {
        mysql_close($this->con);
    }


}