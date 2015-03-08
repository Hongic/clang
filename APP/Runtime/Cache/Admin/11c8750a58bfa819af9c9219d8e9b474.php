<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>后台登陆</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>

            .login{
                padding: 0px 0px;
                margin: 0px auto;
                background-image: url("__PUBLIC__/Images/login_bg.jpg");
                background-repeat: no-repeat;
                width: 483px;
                height: 243px;
                margin-top: 260px;


            }
            .login_tb{
                position: relative;
                left: 100px;
                top: 58px;
                font-size: 20px;
                line-height: 2em;
            }
            .login_tb_inp{
                background-color: #fff;
                width: 200px;
                font-size: 18px;
                padding: 3px;
                vertical-align: middle;
                border: 0px;
            }
            .radius{
                -webkit-border-radius: 8px; 
                -moz-border-radius: 8px;
                border-radius:8px;
                position: relative;
                behavior:url(__PUBLIC__/Js/pie.htc);
                font-size: 18px;
            }
        </style>
        <script language="javascript">
            function doSubmit() {
                if (document.form.name.value == "") {
                    alert("请输入用户名");
                    form.name.focus;
                    return false;
                }
                if (document.form.pwd.value == "") {
                    alert("请输入密码");
                    form.pwd.focus;
                    return false;
                }
                return  true;
            }
        </script>

    </head>
    <body>
        <div class="login">
            <form action="<?php echo U('Admin/Login/loginCheck');?>" method="post" name="form" onsubmit="return doSubmit();">
                <table class="login_tb">
                    <tr>
                        <td>用户：</td>
                        <td><input type="text" name="name" class="login_tb_inp"></td>
                    </tr>
                    <tr>
                        <td>密码：</td>
                        <td><input type="password" name="pwd" class="login_tb_inp"> </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center">
                            <input type="submit" name="submit" value=" 登 陆 " class="radius" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>