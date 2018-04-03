<?php

/**
 * composer 工具类
 *
 * User: spencer
 * Date: 2018/4/3
 * Time: 8:55
 * function：
 * 1、进行主流数据库使用连接（mysql+sqlite+sql server+redis+mongo）
 * 2、连接多样化，数据处理封装统一化
 * 3、依赖monolog进行日志记录
 *
 */

namespace DbHelper;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Helper
{
    /**
     * 数据库类型
     */
    private $dbtype;

    /**
     * 日志
     */
    private $log;

    /**
     * Api constructor.
     *
     * @param string dbtype 数据库类型 string logurl 日志保存地址
     * @return void
     */
    public function __construct($dbtype,$logurl)
    {
        //创建日志对象，进行日志保存
        $this->log = new Logger("dblog");
        $this->log->pushHandler(new StreamHandler($logurl.'/dbhandle.log',Logger::WARNING));
        $this->dbtype = $dbtype;
    }


    /**
     * 测试 composer demo可行性
     */
    public function test(){
        print(" i am test");
    }

    /**
     * function:connect database
     * time : 2018-04-03
     * @param $param arr 连接参数
     * @return dbo
     */
    public function conn($param){

    }


}
