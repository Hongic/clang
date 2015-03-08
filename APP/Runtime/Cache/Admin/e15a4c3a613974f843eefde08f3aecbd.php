<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>用户管理--编辑</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="__PUBLIC__/Js/form.js"></script>
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/form.css">
    </head>
    <body>
        <div>
            <form method="post" action="__URL__/update" name="form">
                <table  class="userform">
                    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "no没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <input type="hidden" name="upid" value="<?php echo ($vo["id"]); ?>">
                        <td >用户：</td>
                        <td ><input type="text" name="name" value="<?php echo ($vo["name"]); ?>" disabled="disabled"></td>
                        </tr>
                        <tr>
                            <td>新密码：</td>
                            <td ><input type="password" name="pwd"></td>
                        </tr>
                        <tr>
                            <td>重输密码：</td>
                            <td ><input type="password" name="newpwd"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <input type="submit" name="submit" value="提交" style="padding: 5px;font-size: 18px;border: 1px;border-radius: 10px;" class="radius" onclick="return doSubmit()">
                            </td>
                        </tr><?php endforeach; endif; else: echo "no没有数据" ;endif; ?>
                </table>
            </form>

        </div>
    </body>
</html>