<?php

/*
 * 教学内容：课程介绍、课程大纲、学习方法、重难点
 */

class ContentAction extends CommonAction {
    /*
     * 课程介绍 仅显示一条
     */

    public function introduce() {

	CommonAction::footer();
	$tb = M("Team");
	$where['type'] = "课程介绍";
	$intro = $tb->where($where)->order("id desc")->limit("1")->select();
	$this->assign("intro", $intro);
	$this->display();
    }

    /*
     * 课程大纲 仅显示一条
     */

    public function outline() {

	CommonAction::footer();
	$tb = M("Team");
	$where['type'] = "课程大纲";
	$out = $tb->where($where)->order("id desc")->limit("1")->select();
	$this->assign("out", $out);
	$this->display();
    }

    /*
     * 学习方法
     */

    public function method() {
	$tbName = "Method";
	CommonAction::footer();

	CommonAction::scan($tbName, $where = "", $pageSize = "15", $order = "id  desc");
	CommonAction::rankList($tbName, $where = "", $order = "click desc", $limit = "0,16");

	$this->display();
    }

    public function meContent() {
	CommonAction::footer();

	$tbName = "Method";
	$sessionType = "method";

	CommonAction::scanClick($tbName, $sessionType, $where = "");


	CommonAction::rankList($tbName, $where = "", $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where = "");
	CommonAction::next($tbName, $where = "");


	$this->display();
    }

    public function upFen() {
	$tbName = "Method";
	$tbName = M($tbName);
	$data['author'] = trim($_POST['name']);
	$data['title'] = trim($_POST['title']);
	$data['content'] = trim($_POST['content']);

	$data['time'] = date("Y-m-d H:i:s");

	$result = $tbName->data($data)->add();

	if ($result == TRUE) {
	    $this->success("分享成功", $jumpUrl = "__URL__/method");
	} else {
	    $this->error("分享失败");
	}
    }

    /*
     * 上传分享的方法 
     */

    /*
     * 重难点
     */

    public function emdiff() {

	CommonAction::footer();
	$this->emList("重点");
	$this->diffList("难点");
	$this->display();
    }

    public function emList($type) {
	$where['type'] = $type;
	$tbName = "Practice";
	$tb = M($tbName);
	$res = $tb->where($where)->order("id desc")->limit("0,20")->getField("id,title,time");
	$this->assign("emphasis", $res);
    }

    public function diffList($type) {
	$where['type'] = $type;
	$tbName = "Practice";
	$tb = M($tbName);
	$res = $tb->where($where)->order("id desc")->limit("0,20")->getField("id,title,time");
	$this->assign("difficult", $res);
    }

    /*
     * 重点
     */

    public function emphasis() {
	$tbName = "Practice";
	$where['type'] = "重点";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");
	$this->display();
    }

    public function emContent() {
	CommonAction::footer();

	$tbName = "Practice";
	$sessionType = "emphasis";
	$where['type'] = "重点";

	CommonAction::scanClick($tbName, $sessionType, $where);


	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    /*
     * 难点
     */

    public function difficulty() {
	$tbName = "Practice";
	$where['type'] = "难点";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");
	$this->display();
    }

    public function diffContent() {
	CommonAction::footer();

	$tbName = "Practice";
	$sessionType = "difficulty";
	$where['type'] = "难点";

	CommonAction::scanClick($tbName, $sessionType, $where);


	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

}
