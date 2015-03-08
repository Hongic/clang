<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>新闻动态--添加</title>
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
                        <td >标题：</td>
                        <td ><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>内容：</td>
                        <td >
                            <textarea id="kindeditor_id" name="content"  style="text-align: left;min-width: 700px;max-width: 800px;min-height: 300px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <input type="submit" name="submit" value="提交" style="padding: 8px;font-size: 18px;border: 1px;border-radius: 10px;" class="radius" onclick="return doSubmit()">
                        </td>
                    </tr>
                </table>
            </form>

        </div>


    </body>
</html>