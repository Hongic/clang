<?php

/*
 *  功能：资源下载  电子书、开源代码
 */

class ResourcesAction extends CommonAction {

    public $tbName = "Resources";

    /*
     * 公共主页
     */

    public function index() {
	CommonAction::footer();
	$this->eList("电子书");
	$this->cList("开源代码");
	$this->display();
    }

    public function eList($type) {
	$where['type'] = $type;
	$tbName = $this->tbName;
	$tb = M($tbName);
	$res = $tb->where($where)->order("id desc")->limit("0,20")->getField("id,title,time");
	$this->assign("ebook", $res);
    }

    public function cList($type) {
	$where['type'] = $type;
	$tbName = $this->tbName;
	$tb = M($tbName);
	$res = $tb->where($where)->order("id desc")->limit("0,20")->getField("id,title,time");
	$this->assign("code", $res);
    }

    /*
     * **********************************************************************************
     * 					    电子书
     */

    public function ebook() {
	$tbName = $this->tbName;
	$where['type'] = "电子书";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	$this->rank("电子书");
	$this->display();
    }

    private function rank($type) {
	$tbName = $this->tbName;
	$tb = M($tbName);
	$where['type'] = $type;
	$rank = $tb->where($where)->order("click desc")->limit("0,20")->select();
	$this->assign("rank", $rank);
    }

    public function eContent() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "ebook";
	$where['type'] = "电子书";

	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rank("电子书");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    public function upFenE() {
	$tbName = $this->tbName;
	$tbName = M($tbName);
	$data['type'] = "电子书";
	$data['author'] = trim($_POST['name']);
	$data['title'] = trim($_POST['title']);
	$data['content'] = trim($_POST['content']);
	$data['yun'] = trim($_POST['yun']);
	$data['time'] = date("Y-m-d H:i:s");

	$result = $tbName->data($data)->add();

	if ($result == TRUE) {
	    $this->success("分享成功，感谢您的分享", $jumpUrl = "__URL__/ebook");
	} else {
	    $this->error("分享失败");
	}
    }

    /*
     *                                         电子书
     * ***********************************************************************************
     */



    /*
     * **********************************************************************************
     * 					      试题库
     */

    public function test() {
	$tbName = $this->tbName;
	$where['type'] = "试题库";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "15", $order = "id  desc");

	$this->rank("试题库");
	$this->display();
    }

    public function tesContent() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "test";
	$where['type'] = "试题库";

	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rank("试题库");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    public function upFenT() {
	$tbName = $this->tbName;
	$tbName = M($tbName);
	$data['type'] = "试题库";
	$data['author'] = trim($_POST['name']);
	$data['title'] = trim($_POST['title']);
	$data['content'] = trim($_POST['content']);
	$data['yun'] = trim($_POST['yun']);
	$data['time'] = date("Y-m-d H:i:s");

	$result = $tbName->data($data)->add();

	if ($result == TRUE) {
	    $this->success("分享成功，感谢您的分享", $jumpUrl = "__URL__/test");
	} else {
	    $this->error("分享失败");
	}
    }

    /*
     *                                         试题库
     * ***********************************************************************************
     */

    /*
     * **********************************************************************************
     * 					    开源代码
     */

    public function code() {
	$tbName = $this->tbName;
	$where['type'] = "开源代码";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	$this->rank("开源代码");
	$this->display();
    }

    public function cContent() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "ebook";
	$where['type'] = "开源代码";

	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rank("开源代码");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    public function upFenC() {
	$tbName = $this->tbName;
	$tbName = M($tbName);
	$data['type'] = "开源代码";
	$data['author'] = trim($_POST['name']);
	$data['title'] = trim($_POST['title']);
	$data['content'] = trim($_POST['content']);
	$data['yun'] = trim($_POST['yun']);
	$data['time'] = date("Y-m-d H:i:s");

	$result = $tbName->data($data)->add();

	if ($result == TRUE) {
	    $this->success("分享成功，感谢您的分享", $jumpUrl = "__URL__/code");
	} else {
	    $this->error("分享失败");
	}
    }

    /*
     *                                      开源代码
     * ***********************************************************************************
     */
}
