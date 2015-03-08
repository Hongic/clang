<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>友情链接--添加</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="__PUBLIC__/Editor/kindeditor.js"></script>
        <script>
            var editor;
            KindEditor.ready(function(K) {
                editor = K.create('#kindeditor_id');
            });
        </script>
    </head>
    <body>

        <div>
            <form method="post" action="__URL__/add" name="form">
                <table class="userform">
                    <tr>
                        <td >网站：</td>
                        <td ><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>网址：</td>
                        <td ><input type="text" name="link"></td>
                    </tr>
                    <tr>
                        <td>次序：</td>
                        <td ><input type="text" name="rank"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <input type="submit" name="submit" value="提交" style="padding: 5px;font-size: 18px;border: 1px;border-radius: 10px;" class="radius" onclick="return doSubmit()">
                        </td>
                    </tr>
                </table>
            </form>

        </div>


    </body>
</html>