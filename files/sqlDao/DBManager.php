<?php

/**
 * Created by PhpStorm.
 * User: huaral
 * Date: 2017/2/20
 * Time: 13:13
 */
define("SQL_HOST","");
define("SQL_ROOT","");
define("SQL_PASSWORD","");

class DBManager
{
    private static $database;
    private  $connectSource;
    private function __construct()
    {
        //connect
    }
    /**
     * 单例
     *
     * @return DBManager
     */
    public static function defaultDBManager(){
        if(!(self::$database instanceof self)){
            self::$database = new DBManager();
        }
        return self::$database;
    }

    /**
     * 连接数据库
     * @return 数据库连接资源
     */
    public function connectSql(){
        try{
            @$this->connectSource = mysql_connect(SQL_HOST,SQL_ROOT,SQL_PASSWORD) or die("错误信息".mysql_error());
        }catch (Exception $exceptione){

        }
//        mysql_select_db("database",$this->connectSource);
//        mysql_query("set names UTF8",$this->connectSource);
//        mysql_num_rows();
        return $this->connectSource;
    }
}