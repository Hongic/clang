<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
    <head>
        <title>视频教学-视频下载</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/public.css"/>
        <link type="text/css" rel="stylesheet" href="__PUBLIC__/CSS/main.css"/>

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

                    <img src="__PUBLIC__/Images/huibiao1.jpg">

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
	    <div class="pub_biaoti">
		视频下载
	    </div>
	    <div class="pub_content">

		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$code): $mod = ($i % 2 );++$i;?><div style="margin-bottom: 10px;">
			<!--      上层 ：类型、标题、时间     -->
			<div style="clear: both;">
			    <div class="ebook_shang">

				<span>
				    <a href="__URL__/vContent/id/<?php echo ($code["id"]); ?>"  title="<?php echo ($code["title"]); ?>">
					<?php echo (utf8substr($code["title"],0,30)); ?>
				    </a>
				</span>

			    </div>
			    <div style="float: right">

				<?php echo (substr($code["time"],0,10)); ?>
			    </div>

			</div>



			<!--      中层 ：关注热度、内容、下载          -->
			<div style="clear: both;margin-bottom: 10px;">

			    <div class="ebook_zhong_redu">
				<?php echo ($code["click"]); ?>

			    </div>

			    <div class="ebook_zhong_download">
				<a href="<?php echo ($code["yun"]); ?>" target="_blank" title="网盘下载">
				    <img src="__PUBLIC__/Images/download.jpg">
				</a>
			    </div>

			    <div class="ebook_zhong_content">

				<?php echo (utf8substr($code["content"],0,200)); ?>

			    </div>

			</div>

		    </div><?php endforeach; endif; else: echo "" ;endif; ?>


	    </div>
	    <div class="page">
		<?php echo ($page); ?>
	    </div>

	</div>
	<div class="pub_content_rank">
	    <div class="pub_biaoti">
		下载榜
	    </div>
	    <div class="rank">
		<?php if(is_array($rank)): $i = 0; $__LIST__ = $rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rank): $mod = ($i % 2 );++$i;?><a href="__URL__/vContent/id/<?php echo ($code["id"]); ?>" title="<?php echo ($rank["title"]); ?>">
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
	    <img src="__PUBLIC__/Images/huibiao1.jpg" style="margin-top: 3px;">
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