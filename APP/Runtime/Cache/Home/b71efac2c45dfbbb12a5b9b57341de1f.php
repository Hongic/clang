<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
    <head>
        <title>C语言精品课程网站--首页--河池学院</title>
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

    <!--                    LOGO  1000x200                                           -->
    <div style="height: 300px;width: 1000px;">
        <img src="__PUBLIC__/Images/logo.jpg" class="main_img">
    </div>


    <!--                   最新公告、新闻资讯、学生设计                              -->
    <div style="clear: both;">

        <!--               最新公告                       -->
	<div class="three">

            <div class="three_title">
                最新公告
            </div>
	    <div style="height: 300px;overflow: auto;padding: 6px;"> 
		<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollAmount="3" scrollDelay="100" direction="up" height="290">
		    <?php echo ($notice); ?>
		</marquee>
	    </div>

            </volist>
        </div>


        <!--                   最新资讯    10 id desc                 -->
        <div class="three">
            <!--  背景是图片    -->
            <div  class="three_title">
                最新资讯
            </div>
            <?php if(is_array($nes)): $i = 0; $__LIST__ = $nes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span style="float: left;padding-left: 3px;"> 
                    <a href="__GROUP__/News/content/id/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
                        <?php echo (utf8substr($vo["title"],0,13)); ?>
                    </a>  
                </span>
                <span style="float: right;padding-right: 3px;">
                    <?php echo (substr($vo["time"],0,10)); ?>
                </span>
                <br><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <!--               学生设计  10  id desc                 -->
        <div class="three">
            <!--  背景是图片    -->
            <div  class="three_title">
                学生设计
            </div>

            <?php if(is_array($des)): $i = 0; $__LIST__ = $des;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span style="float: left;padding-left: 3px;"> 
                    <a href="__GROUP__/Practice/desContent/id/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
                        <?php echo (utf8substr($vo["title"],0,13)); ?>
                    </a>  
                </span>
                <span style="float: right;padding-right: 3px;">
                    <?php echo (substr($vo["time"],0,10)); ?>
                </span>
                <br><?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
    </div>


    <!--                     荣誉图  左滚动                                  -->
    <div class="pic"  >

        <div class="three_title" style="width: 990px;">
            最新荣誉
        </div>



	<div id="demo">
            <div id="indemo">
                <div id="demo1">
                    <?php if(is_array($pic)): $i = 0; $__LIST__ = $pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic): $mod = ($i % 2 );++$i;?><div class="two">
			    <a href="<?php echo ($pic["site"]); ?>"  target="_blank">
				<img src="__ROOT__/Uploads/Results/m_<?php echo ($pic["pic"]); ?>" border="0">
				<br>
				<?php echo (utf8substr($pic["title"],0,10)); ?>
			    </a>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <div id="demo2"> </div>
            </div>
        </div>


    </div>


    <script>

	var speed = 10;
	var tab = document.getElementById("demo");
	var tab1 = document.getElementById("demo1");
	var tab2 = document.getElementById("demo2");
	tab2.innerHTML = tab1.innerHTML;
	function Marquee() {
	    if (tab2.offsetWidth - tab.scrollLeft <= 0)
		tab.scrollLeft -= tab1.offsetWidth
	    else {
		tab.scrollLeft++;
	    }
	}
	var MyMar = setInterval(Marquee, speed);
	tab.onmouseover = function() {
	    clearInterval(MyMar)
	};
	tab.onmouseout = function() {
	    MyMar = setInterval(Marquee, speed)
	};

    </script>



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