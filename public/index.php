<?php
/**
 * @node_name 导航权限节点描述
 * Desc: 功能描述
 * Created by PhpStorm.
 * User: 张鹏玄 | <zhangpengxuan@yundun.com>
 * Date: 2016/10/13 11:54
 */
define("APP_PATH", realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */
$app = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->run();