<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>教师内容-经典程序-查看</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/table.css">
    </head>
    <body>

        <div>
            <a href="__GROUP__/Disabuse/add" target="rightFrame">
                <input type="button" value="添加数据" class="csadd">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="__GROUP__/Disabuse/browse" target="rightFrame">
                <input type="button" value="查看数据" class="csadd">
            </a>
        </div>

        <div>

            <table class="tb">
                <tr>
                    <th>ID</th>
                    <th>标题</th>
                    <th>内容</th>
                    <th>发布者</th>
                    <th>时间</th>
                    <th>点击量</th>
                    <th>操作</th>
                </tr>

                <!---   数据列表    --->
                <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "no没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td class="biao"><?php echo (utf8substr($vo["title"],0,20)); ?></td>

                        <td class="zhong"><?php echo (utf8substr($vo["content"],0,50)); ?></td>
                        <td><?php echo (($vo["author"])?($vo["author"]):"暂无"); ?></td>
                        <td><?php echo (($vo["time"])?($vo["time"]):"暂无"); ?></td>
                        <td><?php echo (($vo["click"])?($vo["click"]):"暂无"); ?></td>
                        <td class="caozuo">
                            <a href="__URL__/delete/delid/<?php echo ($vo["id"]); ?>" alt="不可恢复，请注意操作。。。">删除</a>  <a href="__URL__/edit/edid/<?php echo ($vo["id"]); ?>">修改</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "no没有数据" ;endif; ?>

            </table>



        </div>

        <div class="page"><?php echo ($page); ?></div>

    </body>
</html>