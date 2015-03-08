<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>用户管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/table.css">
    </head>
    <body>
        <div>
            <form action="" method="post">
                <table class="tb">
                    <tr>
                        <th>ID</th>
                        <th>用户</th>
                        <th>密码</th>
                        <th>级别</th>
                        <th>注册时间</th>
                        <th>操作</th>
                    </tr>

                    <!---   数据列表    --->
                    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "no没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td class="zou"><?php echo ($vo["name"]); ?></td>
                            <td class="zou"><?php echo ($vo["pwd"]); ?></td>
                            <td><?php echo ($vo["level"]); ?></td>
                            <td><?php echo ($vo["time"]); ?></td>
                            <td class="caozuo">
                                <a href="__URL__/delete/delid/<?php echo ($vo["id"]); ?>" alt="不可恢复，请注意操作。。。">删除</a>  <a href="__URL__/edit/edid/<?php echo ($vo["id"]); ?>">修改</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "no没有数据" ;endif; ?>
                </table>
            </form>
        </div>

        <div class="page"><?php echo ($page); ?></div>
    </body>
</html>