<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
    <head>
        <title>后台管理--首页--信息栏</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <style>
            .cc{
                text-align: center;
                padding-top: 90px;
                font-size: 20px;
            }
        </style>
    </head>
    <body class="cc">
        <div>
            <h1>欢迎登陆后台管理</h1>
            <?php echo ($name); ?><br><br>
            <?php echo ($time); ?>
        </div>
    </body>
</html>