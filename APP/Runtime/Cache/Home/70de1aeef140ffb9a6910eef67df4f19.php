<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
    <head>
        <title>教学成果--教师荣誉--详细</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/public.css"/>
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/main.css"/>
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/pic.css"/>
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/pro_drop_1.css"/>
        <script type="text/javascript" src='__PUBLIC__/Js/stuHover.js'></script>
    </head>
    <body>

        <!--   页头：导航栏       -->
    <!--   页头：导航栏       -->
<div class="hdf">
    <div class="header">

        <!-- 导航栏  -->

        <div>

            <ul id="nav">
                <li class="top">

                    <img src="__PUBLIC__/Images/huibiao.jpg">

                </li>
                <li class="top">
                    <a href="<?php echo U('Home/Index/index');?>" class="top_link">
                        <span>
                            首页
                        </span>
                    </a>
                </li>
                <li class="top">
                    <a href="<?php echo U('Home/News/index');?>" class="top_link">
                        <span>
                            新闻资讯
                        </span>
                    </a>
                </li>
                <li class="top">
                    <a href="#" id="products" class="top_link">
                        <span class="down">
                            教学团队
                        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="<?php echo U('Home/Team/teachers');?>" class="fly">
                                教师队伍
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Team/projects');?>" class="fly">
                                科研项目
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Team/thesis');?>" class="fly">
                                科研论文
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="top">
                    <a href="#" id="services" class="top_link">
                        <span class="down">
                            教学内容
                        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="<?php echo U('Home/Content/introduce');?>">
                                课程简介
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Content/outline');?>">
                                课程大纲
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Content/method');?>">
                                学习方法
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Content/emdiff');?>">
                                重难点
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="top">
                    <a href="#" id="contacts" class="top_link">
                        <span class="down">
                            教学实践
                        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="<?php echo U('Home/Practice/classics');?>">
                                经典程序
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Practice/design');?>">
                                学生设计
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Practice/disabuse');?>">
                                教师解惑
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="top">
                    <a href="#" id="contacts" class="top_link">
                        <span class="down">
                            教学成果
                        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="<?php echo U('Home/Results/student');?>">
                                学生荣誉
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Results/teacher');?>">
                                教师荣誉
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="top">
                    <a href="#" id="contacts" class="top_link">
                        <span class="down">
                            视频教学
                        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="<?php echo U('Home/Video/timetable');?>">
                                本周课表
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Video/local');?>">
                                在线视频
                            </a>
                        </li>
			<li>
                            <a href="<?php echo U('Home/Video/online');?>">
                                网络视频
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Video/video');?>">
                                视频下载
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="top">
                    <a href="<?php echo U('Home/Resources/index');?>" id="contacts" class="top_link">
                        <span class="down">
                            资源下载
                        </span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="<?php echo U('Home/Resources/ebook');?>">
                                电子书
                            </a>
                        </li>
			<li>
                            <a href="<?php echo U('Home/Resources/test');?>">
                                试题库
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Resources/code');?>">
                                开源代码
                            </a>
                        </li>

                    </ul>
                </li>




            </ul>
        </div>




    </div>
</div>

    <!--   主要内容           -->
    <div class="main">
        <div class="pub_content_left">

	    <div class="pub_content">

		<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$stu): $mod = ($i % 2 );++$i;?><div style="clear: both;">
			<div class="pub_content_left_cen">
			    <h2><?php echo ($stu["title"]); ?> </h2>
			    <br>
			    发布者：<?php echo ($stu["author"]); ?> 时间：<?php echo ($stu["time"]); ?> 点击量：<?php echo ($stu["click"]); ?>
			    <br>
			    <img src="__APP__/Uploads/Results/m_<?php echo ($stu["pic"]); ?>" style="max-width: 500px;">
			</div>
			<br>
			<div style="line-height: 1.6em;min-height: 300px;">
			    <?php echo ($stu["content"]); ?>
			</div>

		    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	    </div>


	    <br>
	    <!-- 百度分享 -->
	    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" >
		<span class="bds_more">分享到：</span>
		<a class="bds_qzone"></a>
		<a class="bds_tsina"></a>
		<a class="bds_tqq"></a>
		<a class="bds_renren"></a>
		<a class="bds_t163"></a>
		<a class="shareCount"></a>
	    </div>
	    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
	    <script type="text/javascript" id="bdshell_js"></script>
	    <script type="text/javascript">
		document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)
	    </script>
	    <!-- Baidu Button END -->
	    <br><br>


	    <!--  上一篇  -->
            <div style="margin: 10px 0px;">
                <?php if(is_array($up)): $i = 0; $__LIST__ = $up;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$up): $mod = ($i % 2 );++$i;?>上一篇： <a href="__URL__/teaContent/id/<?php echo ($up["id"]); ?>" title="<?php echo ($up["title"]); ?>">
                        <?php echo (utf8substr($up["title"],0,32)); ?>
                    </a>  <br><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php if(is_array($next)): $i = 0; $__LIST__ = $next;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$next): $mod = ($i % 2 );++$i;?>下一篇： <a href="__URL__/teaContent/id/<?php echo ($next["id"]); ?>" title="<?php echo ($next["title"]); ?>">
                        <?php echo (utf8substr($next["title"],0,32)); ?>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>

	</div>


	<div class="pub_content_rank">
	    <div class="pub_biaoti">
		荣誉榜
	    </div>
	    <div class="rank">
		<?php if(is_array($rank)): $i = 0; $__LIST__ = $rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rank): $mod = ($i % 2 );++$i;?><a href="__URL__/teaContent/id/<?php echo ($rank["id"]); ?>">
			<?php echo (utf8substr($rank["title"],0,17)); ?>
		    </a>
		    <br><?php endforeach; endif; else: echo "" ;endif; ?>
	    </div>
	</div>

    </div>

    <!--  页尾  -->
    
<!--   页尾：版权、校内、投资公司   -->
<div class="fo">

    <!--   版权      -->
    <div class="foot">
        <div class="foote">
            我们 
            <hr>
	    <span style="width:188px;display: block;float: left;text-align: left;"> 
		<a href="<?php echo U('Home/About/us');?>">
		    关于我们
		</a>
	    </span>
	    <br>
	    <span style="width:188px;display: block;float: left;text-align: left;"> 
		<a href="<?php echo U('Home/About/relation');?>">
		    联系我们
		</a>
	    </span>
	    <br>
	    <span style="width:188px;display: block;float: left;text-align: left;"> 
		<a href="<?php echo U('Home/About/fvq');?>">
		    常见问题
		</a>
	    </span>
            <div style="text-align: left;">
                <a href="__ROOT__/Admin/Index/index" target="_bliank">
                    管理
                </a>
            </div>
        </div>

        <!--   链接      -->
        <div class="foote">
            友情链接 
            <hr>
	    <?php if(is_array($youlink)): $i = 0; $__LIST__ = $youlink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$youlink): $mod = ($i % 2 );++$i;?><span style="width:188px;display: block;float: left;text-align: left;">
		    <a href="<?php echo ($youlink["link"]); ?>" target="_blank" title="<?php echo ($youlin["title"]); ?>">
			<?php echo (utf8substr($youlink["title"],0,11)); ?>
		    </a>
		</span><?php endforeach; endif; else: echo "" ;endif; ?>

        </div>

	<!---   会标               --->

	<div class="foote">
	    会标
	    <hr>
	    <img src="__PUBLIC__/Images/footer.jpg" style="margin-top: 3px;">
	</div>

        <!--   介绍      -->
        <div class="foote">
            介绍 
            <hr>
	    <span style="width:188px;display: block;float: left;text-align: left;padding-top: 3px;"> 
		<?php echo (utf8substr($jieshao,0,100)); ?>
	    </span>
        </div>

	<!--   版权      -->
        <div class="foote">
            版权 
            <hr>
            <?php if(is_array($copyRight)): $i = 0; $__LIST__ = $copyRight;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cpy): $mod = ($i % 2 );++$i;?><span style="width:188px;display: block;float: left;text-align: left;padding-top:  3px;"> 
		    <?php echo ($cpy["content"]); ?>
                </span><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>


    </div>

</div>
</body>
</html>