<?php
//数据库连接信息
$DB_HOST = 'localhost';        //数据库地址
$DB_NAME = 'hnup_rucheng_pro';   //数据库名
$DB_USER = 'root';   //数据库用户名
$DB_PASS = 'root';   //数据库密码
$DB_PREFIX = 'huoniao_';       //数据库表前缀
$DB_CHARSET = 'utf8';          //数据库编码


//--------------++++--------------
//内存优化配置信息
$cfg_memory['prefix'] = 'hnuprucheng_';     //内存变量前缀，可更改，避免同服务器中的程序引用错乱
$cfg_memory['redis']['state'] = 1;    //redis服务器状态
$cfg_memory['redis']['server'] = '127.0.0.1';    //redis服务器地址，默认127.0.0.1
$cfg_memory['redis']['port'] = '3379';           //redis服务端口，默认6379
$cfg_memory['redis']['requirepass'] = '8300007';  //requirepass
$cfg_memory['redis']['db'] = '10';          //使用数据库
$cfg_memory['redis']['pconnect'] = '1';          //保持长连接
$cfg_memory['redis']['serializer'] = '1';        //使用内置序列化/反序列化