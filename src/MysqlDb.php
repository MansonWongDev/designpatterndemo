<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/25 0025
 * Time: 17:47
 */
namespace Mansonwong\Designpatterndemo;

class MysqlDb implements Db{
    protected $con=null;

    public function conn($host,$name,$psw,$port,$dbname)
    {
        if (!$this->con){
//            $con = mysql_connect($host,$name,$psw);
//            if (!$con)
//            {
//                throw new Exception('Could not connect: ' . mysql_error());
//            }
//            mysql_select_db($dbname, $con);
            echo "Mysql 链接ok！".PHP_EOL;
            $this->con = 'Mysql 链接ok！';
        }
        return $this->con;
    }
    public function query($query)
    {
       // return mysql_query($query);
        return 'Mysql 查询ok';
    }

    public function close()
    {
     //   mysql_close($this->con);
        return 'Mysql 关闭ok';
    }


}