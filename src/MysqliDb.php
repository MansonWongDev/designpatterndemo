<?php
/**
 * Created by PhpStorm.
 * User: WWJ 260945307@qq.com
 * Date: 2021/10/25 0025
 * Time: 17:47
 */
namespace Mansonwong\Designpatterndemo;

class MysqliDb implements Db{

    protected $con=null;

    public function conn($host,$name,$psw,$port,$dbname)
    {
        if (!$this->con){
//            $con = mysqli_connect($host,$name,$psw,$dbname,$port);
//            if (!$con)
//            {
//                throw new Exception('Could not connect: ' . mysqli_error());
//            }
            echo "Mysqli 链接ok！".PHP_EOL;
            $this->con = '链接ok！';
        }
        return $this->con;
    }
    public function query($query)
    {
        //return mysqli_query($this->con,$query);
        return 'Mysqli 查询ok';
    }
    public function close()
    {
        mysqli_close($this->con);
        return 'Mysqli 关闭ok';
    }

}