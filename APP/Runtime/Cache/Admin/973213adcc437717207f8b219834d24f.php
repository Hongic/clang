<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>视频教学-本地视频-添加</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/table.css">
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
            <a href="__GROUP__/Local/add" target="rightFrame">
                <input type="button" value="添加数据" class="csadd">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="__GROUP__/Local/browse" target="rightFrame">
                <input type="button" value="查看数据" class="csadd">
            </a>
        </div>

        <div>
            <form method="post" action="__URL__/add" name="form" enctype="multipart/form-data">
                <table class="userform">
                    <tr>
                        <td >标题：</td>
                        <td ><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td >视频截图：</td>
                        <td ><input type="file" name="pic"> &nbsp;  规格：300*300 </td>
                    </tr>
                    <tr>
                        <td >视频上传：</td>
                        <td ><input type="file" name="video"> &nbsp; 上限：<?php echo ($mmax); ?></td>
                    </tr>
                    <tr>
                        <td>内容描述：</td>
                        <td >
                            <textarea id="kindeditor_id" name="content"  style="text-align: left;min-width: 700px;max-width: 800px;min-height: 300px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td >网盘地址：</td>
                        <td ><input type="text" name="yun"></td>
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