<?php

/*
 * 视频教学： 本周课表、在线学习、视频下载
 */

class VideoAction extends CommonAction {
    /*
     * 本周课表
     */

    public function timetable() {
	CommonAction::footer();
	$tb = M("Notice");
	$where['type'] = "本周课表";
	$timetable = $tb->where($where)->order("id desc")->limit("1")->select();
	$this->assign("timetable", $timetable);
	$this->display();
    }

    /*
     * 视频下载
     */

    public function video() {
	$tbName = "Resources";
	$where['type'] = "视频下载";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	$this->rankList($tbName, $where, $order = "click desc", $limit = "0,10");
	$this->display();
    }

    public function vContent() {
	CommonAction::footer();

	$tbName = "Resources";
	$sessionType = "video";
	$where['type'] = "视频下载";

	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rankList($tbName, $where, $order = "click desc", $limit = "0,10");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    /*
     * 在线视频
     */

    public function local() {
	CommonAction::footer();

	$tbName = "Local";

	CommonAction::scan($tbName, $where = "", $pageSize = "5", $order = "id  desc");

	$this->rankList($tbName, $where = "", $order = "click desc", $limit = "0,10");
	$this->display();
    }

    public function loContent() {
	CommonAction::footer();

	$tbName = "Local";
	$sessionType = "local";


	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rankList($tbName, $where = "", $order = "click desc", $limit = "0,10");

	CommonAction::up($tbName, $where = "");
	CommonAction::next($tbName, $where = "");


	$this->display();
    }

    /*
     * 网络视频
     */

    public function online() {
	CommonAction::footer();

	$tbName = "Online";

	CommonAction::scan($tbName, $where = "", $pageSize = "5", $order = "id  desc");

	$this->rankList($tbName, $where = "", $order = "click desc", $limit = "0,10");
	$this->display();
    }

    public function onContent() {
	CommonAction::footer();

	$tbName = "Online";
	$sessionType = "online";


	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rankList($tbName, $where = "", $order = "click desc", $limit = "0,10");

	CommonAction::up($tbName, $where = "");
	CommonAction::next($tbName, $where = "");


	$this->display();
    }

}
