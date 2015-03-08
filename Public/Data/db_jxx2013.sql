/*
Navicat MySQL Data Transfer

Source Server         : Hong
Source Server Version : 50610
Source Host           : localhost:3306
Source Database       : public_benefit

Target Server Type    : MYSQL
Target Server Version : 50610
File Encoding         : 65001

Date: 2013-11-15 15:17:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `public_about`
-- ----------------------------
DROP TABLE IF EXISTS `public_about`;
CREATE TABLE `public_about` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `type` varchar(10) DEFAULT NULL COMMENT '类型',
  `time` date DEFAULT NULL COMMENT '发布时间',
  `author` varchar(20) DEFAULT NULL COMMENT '发布者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_about
-- ----------------------------
INSERT INTO `public_about` VALUES ('1', '版权信息', '<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">地址：广西宜州龙江路42号&nbsp;</span> \r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">邮编：546300&nbsp;</span> \r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">版权所有 2013 河池学院 新青年公益社</span> \r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">Copyright@2013 All Rights Reserved&nbsp;</span> \r\n</div>', '版权信息', '2013-10-30', 'hong');
INSERT INTO `public_about` VALUES ('2', '公告', '原本定在今晚七点到教室开会，现在地点改在东区操场', '最新公告', '2013-10-30', 'hong');
INSERT INTO `public_about` VALUES ('4', '组织机构', '<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">会长：</span></b><b><span style=\"font-size:18px;\"> </span></b><b></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 1、召集并主持各项会议，提出议案，并指导他们的工作。<b><span></span></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 2、在协会大会及其他相应的会议上发言，汇报工作。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">副会长</span></b><span style=\"font-size:18px;\">： </span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 1、发展发动会员，上传下达，协调管理各部门工作。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp;&nbsp;2、监督社团活动及财务情况。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">秘书部</span></b><span style=\"font-size:18px;\">：</span><span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 1、协调团队各部门之间的工作。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 2、负责团队干部会议和团队负责人大会的会议记录。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 3、配合各部门组织策划各种活动团队一系列规章制度的监督实施。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">宣传部：</span></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp;&nbsp;1、负责社团的形象设计和宣传。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 2、为社团及其他各部组织活动做宣传。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">基金部：</span></b><b><span style=\"font-size:18px;\"> </span></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 1、负责重大活动的财务预算。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp;&nbsp;2、负责收取管理本社的各项收入。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">人力资源部：</span></b><b><span style=\"font-size:18px;\"> </span></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 1、负责志愿者的招募、建档、服务和反馈工作，志愿者参与活动的建档、维护、反馈和信息发布。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 2、对会员参与活动情况考核并参与评比，关心会员成长发展及素质拓展，组织志愿者的培训规划及组织实施。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">策划部：</span></b><b><span style=\"font-size:18px;\"> </span></b><b></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 1、负责各种活动的组织、策划。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp;&nbsp;2、推广、筹划与其它机构的合作，与相应团体与机构的项目申请、接洽和协调。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<b><span style=\"font-size:18px;\">网络部：</span></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 1、负责网站的建立与日常维护，建立网络管理制度和信息发布流程等，整体宣传工作，用广告及形象的策划与实施。<span></span> \r\n</p>\r\n&nbsp; &nbsp; 2、扩大组织的影响力，与外部媒介的联络与沟通，负责新闻危机应对及处理。', '组织机构', '2013-11-05', 'hong');
INSERT INTO `public_about` VALUES ('8', '三天后秋游', '经本班班委研究决定，于三天后去秋游。。。', '最新公告', '2013-11-02', 'hong');
INSERT INTO `public_about` VALUES ('9', '新青年爱心公益社简介', '&nbsp;&nbsp;&nbsp; 新青年爱心公益社以“爱心 环保 奉献”为主题，以“凝聚每份爱 点燃每颗心”为宗旨，以“传递真情 温暖人心”为口号。由志愿者自愿组成，以从事非营利性、服务于社会的公益活动为服务性质。\r\n<p class=\"p0\" style=\"margin-left:23.95pt;\">\r\n	公益服务范围：\r\n</p>\r\n<p class=\"p0\">\r\n	（一）调查社会弱势人群的基本情况，唤起社会对弱势人群的关心与参与。\r\n</p>\r\n<p class=\"p0\">\r\n	（二）组织会员提供业余工作时间开展爱心公益活动，不计报酬，服务学校，服务社会。<br />\r\n&nbsp;&nbsp;&nbsp; 1.深入敬老院、福利院、康复中心等服务基地，为孤寡残弱群体提供服务。<br />\r\n&nbsp;&nbsp;&nbsp; 2.开展关爱留守儿童志愿服务活动。\r\n</p>\r\n<p class=\"p0\">\r\n	&nbsp;&nbsp;&nbsp; 3.参与环境保护等志愿性公益活动。<br />\r\n&nbsp; &nbsp; 4.参与国家相关公益宣传的主题活动。\r\n</p>\r\n<p class=\"p0\">\r\n	&nbsp;&nbsp;&nbsp; 5.开展其他有助于唤醒社会助人风尚、共建和谐社会公益活动。\r\n</p>\r\n<p>\r\n	&nbsp; &nbsp; 设有秘书部、策划部、宣传部、基金部、人力资源部、网络部、服务部。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center;\">\r\n	<b><span style=\"font-size:24px;\">河池学院新青年爱心公益社社团章程</span><span></span></b> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第一章<span> </span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	总则<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第一条 本社团全称是“河池学院新青年爱心公益社”。 “河池学院新青年爱心公益社”是由志愿从事社会服务公益事业的河池学院大学生自愿组成的公益性组织。本社团接受校团委、校学生社团联合会的监督。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 第二条<span> </span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	本社团的宗旨：通过组织和指导青年志愿者活动，倡导社会的和谐统一，通过开展公益活动，促进社会和谐发展。活动立足校园，兼顾校外，通过宣传活动促使社会都具备公益慈善的思想，从而帮助更多需要帮助的人和弱势群体，体现当代大学生勇于担当，乐于奉献的精神，营造良好的社会风气。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第三条<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	本社团奉行平等，互助，奉献，团结，守法，创新的原则。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第二章 活动形式  \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第四条<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	公益活动：深入敬老院、福利院、康复中心等服务基地，为孤寡残弱群体提供服务；开展关爱留守儿童志愿服务活动。参与环境保护等志愿性公益活动；参与国家相关公益宣传的主题活动；开展其他有助于唤醒社会助人风尚、共建和谐社会公益活动。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第三章 会员<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第五条 本协会实行注册会员制。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第六条 凡承认协会章程并提出申请的同学，经秘书处审查通过即可注册为本社团会员。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第七条 注册会员权利  \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	1．有表决权、选举权和被选举权。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2．有对协会工作提出建议、批评和进行监督的权利。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	3．有向本社推荐会员的权利。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	4．有请求协会维护其合法权益，帮助和解决在志愿活动中 遇到的实际困难和问题的权利。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 第八条 注册会员的义务<span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:6.0pt;\">\r\n	1．遵守本社章程，执行本社决议，宣传和推广青年志愿者行动的义务。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 2．参加本社活动，完成本社任务，宣传社团的宗旨，维护社团的声誉。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 3．主动向本社提供各种信息、意见和建议，协助并监督组织活动执行情况的义务。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 4. 加入本社团必须怀抱一颗感恩社会的心，奉献社会，积极自愿的参加各项公益活动。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第九条 本社实行入社和退社自愿的原则。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第四章 组织机构   \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十条 河池学院新青年爱心公益社是协会的最高权力机构。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十一条 本社设会长一名，副会长三名及各部主要负责人组成。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十二条 会长职责： \r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-indent:-18.0pt;\">\r\n	1．召集并主持各项会议，提出议案，并指导他们的工作。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2．在协会大会及其他相应的会议上发言，汇报工作。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十三条　副会长职责 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	1．发展发动会员，上传下达，协调管理各部门工作。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2．监督社团活动及财务情况。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十四条 秘书部职责<span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:20.25pt;text-indent:-20.25pt;\">\r\n	1.&nbsp;&nbsp;\r\n协调团队各部门之间的工作。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:20.25pt;text-indent:-20.25pt;\">\r\n	2.&nbsp;&nbsp;\r\n负责团队干部会议和团队负责人大会的会议记录。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:20.25pt;text-indent:-20.25pt;\">\r\n	3.&nbsp;&nbsp;\r\n配合各部门组织策划各种活动团队一系列规章制度的监督实施。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十五条　宣传部职责：<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 1．负责社团的形象设计和宣传。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 2．为社团及其他各部组织活动做宣传。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十六条　基金部职责 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	1．负责重大活动的财务预算。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2．负责收取管理本社的各项收入。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十七条　人力资源部职责 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	1. 负责志愿者的招募、建档、服务和反馈工作，志愿者参与活动的建档、维护、反馈和信息发布。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2. 对会员参与活动情况考核并参与评比，关心会员成长发展及素质拓展，组织志愿者的培训规划及组织实施。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	 第十八条 策划部职责 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	1．负责各种活动的组织、策划。 \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2．推广、筹划与其它机构的合作，与相应团体与机构的项目申请、接洽和协调。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第十九条 网络部职责<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	1. 负责网站的建立与日常维护，建立网络管理制度和信息发布流程等，整体宣传工作，用广告及形象的策划与实施。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2. 扩大组织的影响力，与外部媒介的联络与沟通，负责新闻危机应对及处理。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第五章 经费  \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第二十条 本协会是立足校园，服务社会公益及社会保障事业的非赢利性学生组织。<span> </span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第二十一条 本社经费来源为：<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	1．各地区学校、学院对各分会的扶持，企业赞助或其他形式的社会捐助。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2．提供咨询、策划、宣传服务及其它活动的创收。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	3. 社团社员的会费。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第二十二条 社团日常经费支出主要用于维持本社正常运转及其用于各种社会活动的开支。经费的使用必须报由秘书部审批，社长签字方可支出并公开财务接受会员及各界监督。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第六章 附则  \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	第二十三条　<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	本章程的解释权属于“河池学院新青年爱心公益社<span>\"</span>。 \r\n</p>\r\n第二十四条　本章程自协会大会通过校团委及校学生社团联合会批准之日起生效。\r\n<p>\r\n	<br />\r\n</p>', '关于我们', '2013-11-04', 'hong');

-- ----------------------------
-- Table structure for `public_activity`
-- ----------------------------
DROP TABLE IF EXISTS `public_activity`;
CREATE TABLE `public_activity` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `time` datetime DEFAULT NULL COMMENT '发布时间',
  `author` varchar(16) DEFAULT NULL COMMENT '发布者',
  `click` int(11) DEFAULT NULL COMMENT '点击量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_activity
-- ----------------------------
INSERT INTO `public_activity` VALUES ('1', '二级学院运动会', '第十一届花生院运动会', '2013-10-30 15:19:51', 'hong', '1');
INSERT INTO `public_activity` VALUES ('2', '关爱西部地区', '今天，我们组织去西部地区，关爱偏远小学--马安中心小学', '2013-11-03 22:30:15', 'hong', '2');
INSERT INTO `public_activity` VALUES ('3', '刘三姐文化艺术节，刘三姐文化艺术节', '刘三姐文化艺术节刘三姐文化艺术节刘三姐文化艺术节刘三姐文化艺术节刘三姐文化艺术节刘三姐文化艺术节', '2013-11-04 21:35:23', 'hong', '2');
INSERT INTO `public_activity` VALUES ('4', '宜州市--马安小学', '<!--StartFragment -->\r\n<div align=\"center\">\r\n	<img alt=\"\" src=\"/public_benefit/Public/Editor/php/../attached/image/20131109/20131109165239_56922.jpg\" /><img alt=\"\" src=\"/public_benefit/Public/Editor/php/../attached/image/20131109/20131109165239_79095.jpg\" /><img alt=\"\" src=\"/public_benefit/Public/Editor/php/../attached/image/20131109/20131109165239_19563.jpg\" /> \r\n</div>', '2013-11-09 16:55:07', 'hong', '2');
INSERT INTO `public_activity` VALUES ('5', '马安小学--心得 1', '&nbsp; &nbsp; 创建和谐社会，构建美好家园。可以这么说，在这次为马安小学布置学习园地的活动中，劳累并快乐着。<br />\r\n<br />\r\n&nbsp; &nbsp; 刚踏进校园，最醒目的是一栋两层的陈旧的教学楼，操场杂草丛生。小朋友看到我们的到来，欢喜并雀跃着。我们很快的展开了我们的工作——为他们布置学习园地。小朋友们也踊跃的参与到我们的队伍中来，整个教室，整个校园充满了欢声笑语，打破了学校的宁静。<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp;“只要人人都付出一点爱，世界将变成美好的人间”，在这次活动中感悟到幸福的真谛，体会到了付出的快乐。在某些山区某些贫困地区，他们需要我们的援助之手，我们应毫不吝啬的积极伸出援助之手，乐于奉献自己一份微薄的爱的力量，温暖着每一个角落，让世界遍地开出爱之花。<br />\r\n<br />\r\n<div style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style=\"line-height:1.5;\">&nbsp;&nbsp;-----卜文成</span> \r\n</div>', '2013-11-13 20:48:36', 'hong', '1');
INSERT INTO `public_activity` VALUES ('6', '马安小学--心得 2', '&nbsp; &nbsp; 那天<span>,</span>是特殊的<span>&nbsp;,</span>也是我大学生活中无法忘却的<span>.</span>因为这是我第一次参加这样的活动<span>,</span>心里自然是兴奋的<span>,</span>激动的<span>.<br />\r\n<br />\r\n</span>&nbsp; &nbsp; 走在漫长曲折的小路上<span>,</span>顶着大太阳<span>,</span>虽然觉得很累<span>,</span>很热<span>,</span>却仍然敌不过心里的激动与好奇<span>.</span>当差不多到校时<span>,</span>可爱活泼的孩子们跑出来迎接我们时<span>,</span>我们觉得再累也值了<span>&nbsp;.</span>走近小学门口<span>,</span>看着模糊到几乎看不出<span>\'</span>马安小学<span>\'</span>的校名<span>,</span>看着简陋的教室<span>,</span>我知道小时的我们比他们幸福些<span>.<br />\r\n<br />\r\n</span>&nbsp; &nbsp; 布置教室时<span>,</span>孩子们会积极帮忙<span>,</span>虽然有些害羞<span>.</span>小孩子很容易满足<span>,</span>即使是一个简单的剪纸<span>,</span>小小的千纸鹤也可以使他们快乐起来<span>.</span>时间飞快<span>,</span>转眼便是分别之际<span>.</span>心中有欢乐<span>,</span>有不舍<span>.</span>降旗仪式结束<span>,</span>与放学的孩子们一起走着那条来时的路<span>,</span>也觉得是一种乐趣<span>.<br />\r\n<br />\r\n</span>&nbsp; &nbsp; 就如学长所说的<span>,</span>当我们参加这些活动时<span>,</span>第一个目的是为了快乐<span>.</span>因为我做这件事<span>,</span>他人快乐<span>,</span>我也快乐<span>,</span>所以<span>,</span>我便做了<span>.</span>而不是说想到这是在做公益<span>,</span>只认为在为别人而做<span>.</span>我想就那么快乐下去<span>,</span>即使会没有周末<span>,</span>只要快乐<span>,</span>又何尝不是享受呢。<span><br />\r\n<br />\r\n<div style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ----</span><span style=\"line-height:1.5;\">秘书部：李小芳</span> \r\n</div>\r\n</span>', '2013-11-13 20:49:47', 'hong', '2');
INSERT INTO `public_activity` VALUES ('7', '马安小学--心得 3', '&nbsp; &nbsp; 俗语曰：人生的真正价值在于对社会的贡献。的确，勤于奉献，乐于助人一直是中华民族的传统美德，因此，为了更好的服务社会，我选择了做一名志愿者，<span>10</span>月下旬的一个下午，我有有幸与我校社会力量工作坊和院青协一起去看望马安小学的小朋友们。步行一个多小时，我们到达了目的地。映入我眼帘的是一幢陈旧的教学楼和一张张天真无邪的笑脸，他们嬉戏打闹，我仿佛透过岁月的肩头看到小学时代的自己，那是我人生中最惬意，最美好的一段时光。<span><br />\r\n<br />\r\n</span>&nbsp; &nbsp; 由于工作关系，我被分配到了二年级组，小朋友们天真活泼的样子牵动了我的心弦。在于他们一起朗诵诗歌，画画，布置学习园地和畅谈理想的过程中，我体会到了他们的真挚与爱学，他们为我们营造了一个美好的氛围，我们一起度过了一个愉快的下午。<span><br />\r\n<br />\r\n</span>&nbsp; &nbsp; 有人说我们志愿者既是奉献者，也是受益者，所谓赠人玫瑰，手有余香。在这个队伍中，从原本不相识变得相识，从陌生人变成了朋友，可以说是有缘相聚，有心相惜，成了每一个参加者的另一种收获。<span><br />\r\n<br />\r\n</span>&nbsp; &nbsp;&nbsp;善良和爱心是很多人与生俱来的天性，我们拥有一份真诚的爱心，就让我们一直散播善良的种子，让爱心之花开满世界每一个角落。<span><br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;------</span>钟小绘<span><br />\r\n<!--[if !supportLineBreakNewLine]--><br />\r\n<!--[endif]--></span>', '2013-11-13 20:52:32', 'hong', '1');
INSERT INTO `public_activity` VALUES ('8', '马安小学--心得 4', '&nbsp; &nbsp; 经过慰问马安小学这一爱心活动之后，我深深地感受到助人为乐之本的深刻含义。作为一名的大学生要继承和发扬这种具有中国特色的优良传统。<br />\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&nbsp; &nbsp; 在其中，我们为马安小学布置学习园地，美化校园，并且与那些可爱的小学生们快乐的嬉戏。他们很激动和很快乐为了表示对我们的感谢，他们认真的背书，积极地帮助我们布置学习园地等。在我们面前，他们展现了马安小学的纪律严谨，刻苦勤奋读书的优良学风，那一幕幕深深地打动了我们。\r\n</p>\r\n<br />\r\n&nbsp; &nbsp; 活动过后，我们感慨万分，其中不仅仅是快乐，还有些许伤感，简陋的校园承载着每个人的梦想。在此，我希望广大人士积极资助贫困地区的学校，献上一份份温暖的爱，温暖每一个角落，使社会变得更美好，实现伟大的中国梦。<br />\r\n<br />\r\n<div style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style=\"line-height:1.5;\">&nbsp;&nbsp;&nbsp;&nbsp;----------</span><span style=\"line-height:1.5;\">吕金凤</span>\r\n</div>', '2013-11-13 20:53:21', 'hong', '1');
INSERT INTO `public_activity` VALUES ('9', '马安小学--心得 5', '<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; 又一次忆起那简陋的教室，又一次看到那稚嫩的礼物，又一次想起那间可爱的笑脸，又一次眼眶溢出了泪水，马安小学的同学们，你们还好吗啊？</span>\r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<br />\r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; 刚进到马安小学的时候，觉得有点心酸，很为孩子们惋惜，但是看到他们站在操场上排着整齐的队伍热烈欢迎我们的到来，用一张张热情的笑脸瞬间融化了我们的顾忌。我们来的目的是帮助小学生们做板报，设计学习园地，和他们一起交流玩耍，给他们单调的学习生活注入了一些色彩。</span>\r\n</div>\r\n<p>\r\n	<span style=\"line-height:1.5;\"></span>\r\n</p>\r\n<p>\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; 令我更欣慰的是小学生们的热情，乐观，在我们忙着做学习园地的时候，他们也没闲着，帮着我们递彩笔，剪纸，画画，一刻也没闲着，看着他们认真工作的样子，一股暖流涌上心头。</span>\r\n</p>\r\n<div style=\"text-align:left;\">\r\n	<br />\r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; 当我们快要离开的时候，我竟出乎意料的收到了两个小孩子画给我的礼物，画里面有一棵苍翠的大树，几只腾飞的鸟儿，一架升起的飞机，我懂他们的意思，也相信他们一定会实现自己的梦想，步行一个多小时的累，工作的辛苦都不算什么，只希望时间能够停留在那一刻，能和他们多待一会儿，多陪他们一会儿。</span>\r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<br />\r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; 孩子们的纯真笑脸，无邪心灵无疑给这个复杂多变，冷漠无情的现代世界注入了一汪清泉，我相信，只要我们再付出多一点关爱，这汪小小的清泉定会洗涤整个世界。</span>\r\n</div>\r\n<div style=\"text-align:left;\">\r\n	<br />\r\n</div>\r\n<div style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -------</span><span style=\"line-height:1.5;\">李惜珍</span>\r\n</div>\r\n<!--[if !supportLineBreakNewLine]--><!--[endif]-->', '2013-11-13 20:54:25', 'hong', '1');
INSERT INTO `public_activity` VALUES ('10', '马安小学--心得 6', '<div style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; 赠人玫瑰，手有余香。去马安小学帮助布置学习园地这一活动，让我从小朋友们那渴望知识的眼神中明白即使再小的付出，对别人来说也是意义非凡的，他们眼里透露出的热情与激动，让我们深深感受到我们的付出是有价值的，让我深深体会到：一名志愿者就是一把泥土，但我们存在的意义，不是被淹没，而是与无数把泥土聚集在一起，成就一座山峰，一条山脉，一片群峰。这样的山峰，可以改变风的走向，可以决定水的流速。这风就是社会风气，这水就是文明进程。那些小朋友们稚嫩的脸上洋溢着笑容，让我享受到付出的快乐，一切的汗水，辛劳而疲倦，都化为满足和欣慰。</span>\r\n</div>\r\n<span>\r\n<div style=\"text-align:left;\">\r\n	<br />\r\n</div>\r\n<div style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -------</span><span style=\"line-height:1.5;\">莫桂院</span>\r\n</div>\r\n</span>', '2013-11-13 20:55:17', 'hong', null);
INSERT INTO `public_activity` VALUES ('11', '马安小学--心得 7', '&nbsp; &nbsp; 这次我代表新青年爱心公益社去做志愿者，我们志愿帮小朋友布置班里的学习园地，叫他们画画，识字，背诗。在这次志愿者的活动中，我深刻体会到了甘甜和心酸。<br />\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&nbsp; &nbsp; 当我们不行到马安小学时，就看到一群小朋友在热烈欢迎我们，这让我有了一种回家的感觉，心里暖暖的。进到校园，看着由破碎的砖头铺成的路，杂草丛生的角落，心里不免泛起一丝心酸。我们国家虽然日渐强盛起来，但一些地区的教学措施还未得到更好的改善。\r\n</p>\r\n<br />\r\n&nbsp; &nbsp; 我是帮助二年级的小朋友布置学习园地，在我们小组的队员的激情下，小朋友们都很乐意帮助我们一起布置学习园地。在布置的途中，我们教小朋友们画画，识字，背诗。谁做得好的，我们都以奖品的方式来奖励和鼓励他们。奖品帮我们吸引了他们的注意力，并提高了他们参加活动的积极性，也使我们的活动顺利进行。在合作中，不仅是我们学会了合作的团队精神，更重要的是让他们学会了分享。<br />\r\n<br />\r\n&nbsp; &nbsp;&nbsp;在回来的路上，我特别注意到了一个一直不说话，并一直低头走路的小男孩，后来从别的小朋友的谈话中，我们了解到他是经常被人欺负，所以才有低头走路这种不好习惯。后来经我们的开导之后，他开始抬头挺胸的走路了。这让我们都很欣慰。我们是和他一起走回来的，把他送到了家门口后，我们才回校的突然觉得一个小小的孩子就要每天这样走那么远的路才能走到学校读书，心里不免感到一阵心酸，让我体会到了求学是一条漫长而辛苦的路。小小年纪的他尚可以每天这样坚持，我们还有什么理由不努力？<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp;这次做志愿者已过去，但我从这次实践活动中学会了许多，也获得了一些实践经验。<br />\r\n<br />\r\n<div style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style=\"line-height:1.5;\">&nbsp;&nbsp;&nbsp;----------</span><span style=\"line-height:1.5;\">服务部：陈翠萍</span>\r\n</div>', '2013-11-13 20:56:07', 'hong', null);

-- ----------------------------
-- Table structure for `public_investor`
-- ----------------------------
DROP TABLE IF EXISTS `public_investor`;
CREATE TABLE `public_investor` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '公益投资介绍',
  `investor` varchar(255) DEFAULT NULL COMMENT '投资人',
  `address` varchar(255) DEFAULT NULL COMMENT '投资者的图片',
  `company` varchar(255) DEFAULT NULL COMMENT '投资公司',
  `addr` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `time` datetime DEFAULT NULL COMMENT '时间',
  `rank` int(5) DEFAULT NULL COMMENT '次序',
  `author` varchar(20) DEFAULT NULL COMMENT '发布者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_investor
-- ----------------------------
INSERT INTO `public_investor` VALUES ('1', '2013新年新衣启动 为新疆青海甘肃送去新衣', '“新年新衣”是由腾讯网、腾讯公益慈善基金会在2011年首倡，联合全国30多家省级主流媒体共同发起的为山区儿童送温暖活动，至今已成功举办过两届，2013新年新衣已启动，现征集爱心企业：如果您是服装企业，欢迎您捐献符合条件的儿童衣物；也欢迎您直接捐款，购买由我们公益供货商提供的“新年新衣”特制款；更欢迎您结合企业自身优势，开展互动捐款类的公益活动。', '腾讯', null, '腾讯公益', 'http://gongyi.qq.com', '2013-11-02 23:00:00', '3', 'hong');
INSERT INTO `public_investor` VALUES ('3', '新浪公益', '新浪公益活动', '新浪', '20131103211856.jpg', '新浪', 'http://gongyi.sina.com.cn/', '2013-11-03 21:18:57', '6', 'hong');
INSERT INTO `public_investor` VALUES ('4', '公益中国', '公益中国', '公益中国', '20131103212736.jpg', '公益中国', 'http://www.pubchn.com/', '2013-11-03 21:27:36', '5', 'hong');
INSERT INTO `public_investor` VALUES ('5', '网易公益', '网易公益', '网易公益', null, '网易公益', 'http://gongyi.163.com/', '2013-11-13 20:12:08', '4', 'hong');

-- ----------------------------
-- Table structure for `public_member`
-- ----------------------------
DROP TABLE IF EXISTS `public_member`;
CREATE TABLE `public_member` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '成员',
  `author` varchar(20) DEFAULT NULL COMMENT '发布者',
  `time` datetime DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_member
-- ----------------------------
INSERT INTO `public_member` VALUES ('1', '第一届成员', '会长：覃芳芳&nbsp;', 'hong', '2013-10-30 15:16:08');

-- ----------------------------
-- Table structure for `public_news`
-- ----------------------------
DROP TABLE IF EXISTS `public_news`;
CREATE TABLE `public_news` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '新闻内容',
  `author` varchar(16) DEFAULT NULL COMMENT '发布者',
  `time` datetime DEFAULT NULL COMMENT '发布时间',
  `click` int(6) DEFAULT NULL COMMENT '点击量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_news
-- ----------------------------
INSERT INTO `public_news` VALUES ('2', '我校新青年爱心公益社新老成员见面交流会成功举行', '&nbsp; &nbsp; &nbsp;(记者&nbsp; 王文珍)10月18日晚新青年爱心公益社在东区1-2-201教室举办新老成员见面交流会。校团委副书记易云飞、社团联合会主席陆兴森、以及社团所有成员参加了此次交流会。此次交流会由农丽娟主持。\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; 在大家的期待中，这次交流会拉开了帷幕。首先，由社团副会长李忠海表达了对新伙伴的热烈欢迎。接着通过PPT为大家详细介绍了社团的七个部门的具体工作和社团的特色活动。其中活动包括，关爱留守儿童，开展调研活动，植树活动，捐书活动等等。其次，会长覃芳芳为大家讲了社团的美好前景并对新社员提出了美好祝愿。最后，校团委副书记易云飞老师对同学们寄予殷切期望。他表示，新青年爱心公益社虽成立不久，我们社团是由志愿者自愿组成，以从事非营利性、服务于社会的公益活动为服务性质的社团。我们以“爱心环保 奉献”为主题，以“凝聚每份爱 点燃每颗心”为宗旨。在今后的工作中希望每个人踏踏实实地去干，学会理解，学会坚持，真正体会到爱心并且愿意奉献爱心。\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<span style=\"line-height:1.5;\">&nbsp; &nbsp; 新成员的到来为</span><span style=\"line-height:1.5;\">新青年爱心公益社</span><span style=\"line-height:1.5;\">注入了新鲜血液，此次见面会促进了团成员的交流；让新成员更加深入理解</span><span style=\"line-height:1.5;\">新青年爱心公益社存在的意义，明确自己身上的责任及今后应该完成的任务。</span>\r\n</p>', 'hong', '2013-11-04 12:12:09', '5');
INSERT INTO `public_news` VALUES ('3', '新青年爱心公益社年度计划', '<div style=\"text-align:center;\">\r\n	<img src=\"/public_benefit/Public/Editor/attached/image/20131105/20131105172815_23856.jpg\" alt=\"\" />\r\n</div>', 'hong', '2013-11-05 17:28:19', '5');
INSERT INTO `public_news` VALUES ('4', '新青年爱心公益社新老成员见面会策划书', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center;\">\r\n	河池学院新青年爱心公益社新老成员见面交流会<span></span> \r\n</p>\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center;\">\r\n	策划书<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	<br />\r\n</p>\r\n<p class=\"MsoNormal\">\r\n	活动名称：河池学院新青年爱心公益社新老成员见面会<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	活动时间：<span>10</span>月<span>18</span>日星期五晚上<span>7:00</span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	活动地点：东区二号教学楼<span>201</span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	活动目的：促进社团内部交流，相互认识，相互了解，尽快融入其中；让新成员更加深入理解新青年爱心公益社存在的意义，明确自己今后应该完成的任务。<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	活动内容：<span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"margin-left:36.0pt;text-indent:-36.0pt;\">\r\n	1、 前期准备：<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; （<span>1</span>）秘书部通知各部门举行见面会的时间、地点<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; （<span>2</span>）邀请指导老师参加本社团的交流会<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; （<span>3</span>）<span>PPT</span>背景制作：网络部（金<span>&nbsp; </span>葵）<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp;&nbsp;（<span>4</span>）关于关爱留守儿童和清洁乡村<span>PPT</span>展示的准备：黄秋霞、金<span>&nbsp; </span>葵 <span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; （<span>5</span>）多媒体教室申请：策划部（尚培培）<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	2、活动过程：<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; （<span>1</span>）会长介绍本社团的情况以及介绍本社团指导老师和主要干部以及各部门工作职责（覃芳芳）<span></span> \r\n</p>\r\n<p class=\"MsoNormal\">\r\n	&nbsp; &nbsp; （<span>2</span>）关爱留守儿童和清洁乡村的<span>PPT</span>展示（农丽娟）<span></span> \r\n</p>\r\n&nbsp; &nbsp;&nbsp;（<span>3</span>）指导老师易云飞作总结。', 'hong', '2013-11-05 18:21:58', '2');
INSERT INTO `public_news` VALUES ('5', '10月金秋，志愿支援献爱心', '<span style=\"font-size:14pt;font-family:宋体;\"><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>阳光明媚，秋风送凉。<span>10</span>月<span>25</span>日<span>13</span>时<span>10</span>分，社会力量工作坊、新青年爱心公益社、院青协、绿原子和爱心社各社团代表及成员共<span>70</span>多人齐聚逸夫楼广场，为即将开展的“马安小学教育帮扶”志愿活动作最后的准备。<span></span></span> \r\n<p class=\"MsoNormal\" style=\"text-indent:28pt;\">\r\n	<span style=\"font-size:14pt;font-family:宋体;\">首先志愿者要从河池学院东区正门步行约四公里的行程来到马安小学。路途虽远，阳光微炎，却未曾动摇志愿者们支援马安小学教育工作的坚定决心。<span></span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:28pt;\">\r\n	<span style=\"font-size:14pt;font-family:宋体;\">志愿者的到来，得到了马安小学全校师生的热情接待。而此次活动按预先的分组进行，分工明确。具体的内容分为两大块：校门喷漆和各年级学习园地的布置。在隆重的“马安小学教育帮扶”活动开启仪式结束后，各小组井然有序的按原先分配好的任务展开工作。爱心社负责一年级教室学习园地的布置，三年级教室的布置由绿原子负责，院青协担任四年级教室布置的任务，新青年爱心公益社则为六年级教室的布置忙碌，而作为此次活动的主办方和策划者——社会力量工作坊在负责二年级教室学习园地布置的同时也肩负校门口“马安小学”校名的喷漆任务。<span></span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:28pt;\">\r\n	<span style=\"font-size:14pt;font-family:宋体;\">在志愿者们积极、投入的工作状态和小学生们热情的帮助下，“马安小学教育帮扶”活动在下午<span>4</span>时许圆满结束。马安小学韦校长在放学降旗仪式上表达了对志愿者的感谢之情，并以此勉励全校学生向志愿者学习。最后，志愿者与全校师生合影留念。<span></span></span> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-indent:28pt;\">\r\n	<span style=\"font-size:14pt;font-family:宋体;\">事后，在记者采访社会力量工作坊会长蓝芳艳中，她说道：“以前我们协会的活动都比较细小零散，这次活动是我们协会第一次主办的大型外出教育帮扶活动。碰巧今年是我们协会成立四周年，在帮扶贫困地区孩子的同时也宣传了我们社会力量工作坊。以后我们还会组织成员来给马安小学的学生说课并会把马安小学作为一个常用实践基地，为马安小学的教育事业尽一份绵力。”教育帮扶在帮助贫困地区孩子的同时也在一定程度上锻炼了大学生的实践能力，也在一定程度上促进了教育事业的发展。<span></span></span> \r\n</p>\r\n<span style=\"font-size:14pt;font-family:宋体;\"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style=\"font-size:14pt;font-family:宋体;\">大学生记者团<span><span>&nbsp; </span></span>潘宇<span><span>&nbsp;&nbsp; </span></span></span>', 'hong', '2013-11-05 18:32:03', '3');

-- ----------------------------
-- Table structure for `public_pic`
-- ----------------------------
DROP TABLE IF EXISTS `public_pic`;
CREATE TABLE `public_pic` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `address` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `site` varchar(255) DEFAULT NULL COMMENT '站点地址',
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_pic
-- ----------------------------
INSERT INTO `public_pic` VALUES ('2', '马安小学', '20131113203332.jpg', null, '2013-11-13 20:33:32');
INSERT INTO `public_pic` VALUES ('3', '马安小学', '20131113203437.jpg', '', '2013-11-13 20:34:37');
INSERT INTO `public_pic` VALUES ('4', '马安小学', '20131113203452.jpg', '', '2013-11-13 20:34:52');

-- ----------------------------
-- Table structure for `public_propriter`
-- ----------------------------
DROP TABLE IF EXISTS `public_propriter`;
CREATE TABLE `public_propriter` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(200) DEFAULT NULL COMMENT '标题',
  `address` varchar(255) DEFAULT NULL COMMENT '图片',
  `content` text COMMENT '内容',
  `time` datetime DEFAULT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_propriter
-- ----------------------------
INSERT INTO `public_propriter` VALUES ('1', '333', '20131104102502.jpg', '646546', '2013-10-23 16:38:20');
INSERT INTO `public_propriter` VALUES ('7', '3265', '20131103204346.jpg', '32658962', '2013-11-03 19:14:48');
INSERT INTO `public_propriter` VALUES ('8', '3232', '20131103202026.jpg', '00000000222222', '2013-11-03 19:16:32');
INSERT INTO `public_propriter` VALUES ('9', '2220', '20131103201817.jpg', '333333333333', '2013-11-03 20:18:17');
INSERT INTO `public_propriter` VALUES ('10', '小米3', '20131104102502.jpg', '小米3的大抢购又胜利结束了，但很多人开始怀疑小米手机被抢购一空的真实性。\r\n            据中国之声《新闻纵横》报道，15日中午12点，被称作“倚天屠龙”双神器的小米手机3与小米电视第一轮开放购买。虽然小米公司表示总共备货了10万台小米手机3与3000台小米电视，但是两款产品都闪电般迅速售罄，这让不少前来抢购的米粉没能如愿。小米3的大抢购又胜利结束了，但很多人开始怀疑小米手机被抢购一空的真实性。 据中国之声《新闻纵横》报道，15日中午12点，被称作“倚天屠龙”双神器的小米手机3与小米电视第一轮开放购买。虽然小米公司表示总共备货了10万台小米手机3与3000台小米电视，但是两款产品都闪电般迅速售罄，这让不少前来抢购的米粉没能如愿。小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了小米3的大抢购又胜利结束了', '2013-11-03 20:36:32');

-- ----------------------------
-- Table structure for `public_school`
-- ----------------------------
DROP TABLE IF EXISTS `public_school`;
CREATE TABLE `public_school` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(255) DEFAULT NULL COMMENT '网站名称',
  `address` varchar(255) DEFAULT NULL COMMENT '链接地址',
  `time` datetime DEFAULT NULL COMMENT '时间',
  `rank` int(6) DEFAULT '20' COMMENT '次序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_school
-- ----------------------------
INSERT INTO `public_school` VALUES ('4', '山谷网', 'http://222.218.130.42/', '2013-11-02 21:58:01', '12');
INSERT INTO `public_school` VALUES ('5', '院团委', 'http://221.7.225.55/tuanwei/', '2013-11-02 22:00:53', '3');
INSERT INTO `public_school` VALUES ('6', '河池学院', 'http://www.hcnu.edu.cn/', '2013-11-09 17:01:04', '1');
INSERT INTO `public_school` VALUES ('7', '河池学院校庆专题网', 'http://222.218.130.75/xqw/', '2013-11-09 17:02:29', '2');

-- ----------------------------
-- Table structure for `public_user`
-- ----------------------------
DROP TABLE IF EXISTS `public_user`;
CREATE TABLE `public_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(20) DEFAULT NULL COMMENT '用户名',
  `pwd` varchar(30) DEFAULT NULL COMMENT '密码',
  `time` datetime DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of public_user
-- ----------------------------
INSERT INTO `public_user` VALUES ('4', '666', 'fb4c82d4c7fa6054606d06fe440536', '2013-10-30 18:29:24');
INSERT INTO `public_user` VALUES ('5', '555', 'fb4c82d4c7fa6054606d06fe440536', '2013-10-30 18:29:34');
INSERT INTO `public_user` VALUES ('10', '嘻嘻', 'fb4c82d4c7fa6054606d06fe440536', '2013-11-02 10:25:05');
INSERT INTO `public_user` VALUES ('11', 'hong', 'dd663385dd1b86ad797b4d5b057037', '2013-11-02 16:00:32');
INSERT INTO `public_user` VALUES ('12', '602', 'ff668c09e979373a46fd6a4216fd02', '2013-11-03 19:10:55');
