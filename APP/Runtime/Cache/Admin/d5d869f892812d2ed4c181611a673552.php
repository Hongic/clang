<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>后台管理--主页</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/table.css">
    </head>
    <frameset id="index" rows="0" cols="20%,*" frameSpacing="0" frameBorder="0">
        <!-- 左侧：菜单栏   -->
        <frame id="left" name="leftFrame" src="left.html" noResize  scrolling="yes"/>
        <!-- 右侧：内容框   -->
        <frame id ="right" name="rightFrame" src="right.html" noresize scrlling="yes"/>
    </frameset>
</html>