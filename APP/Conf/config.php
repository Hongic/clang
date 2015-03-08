<?php

return array(
    //'配置项'=>'配置值'
    /*
     * 调试配置
     */

    'APP_STATUS' => 'debug',
    'SHOW_PAGE_TRACE' => '0',
    /*
     * 分组配置
     */
    'APP_GROUP_MODE' => '1', // 1 是独立分组 0 普通
    'APP_GROUP_LIST' => 'Home,Admin', //分组列表
    'DEFAULT_GROUP' => 'Home', // 默认分组
    /*
     *  系統配置
     */
    'URL_MODEL' => '2',
    /*
     *  数据库配置
     */
    'DB_TYPE' => 'mysql',
    'DB_HOST' => '127.0.0.1',     // 服务器域名
    'DB_USER' => 'hong',             // 数据库登陆名
    'DB_PWD' => '1877888666', // 登陆密码
    'DB_PORT'=>'3306',
    'DB_NAME' => 'clang',           // 数据库名称
    'DB_PREFIX'=>'clang_',
    'DB_CHARSET'=>'UTF8',
);
?>