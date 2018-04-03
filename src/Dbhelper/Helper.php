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

class Api
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
     * 连接mysql
     *
     * $param array $param 连接数据库必备参数
     * $return database object
     */
    public function  ConMysql($param){
        $pdo = new \PDO($param['host'],$param['uname'],$param['pswd']);
        if($pdo)
            $this->log->warning('连接mysql['.$param['host'].']数据库成功');
        return $pdo;
    }




}
