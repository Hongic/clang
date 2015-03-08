<?php

/*
 * 教学实践：经典程序、学生设计、教师解惑
 */

class PracticeAction extends CommonAction {
    /*
     * 经典程序
     */

    public function classics() {

	$tbName = "Practice";
	$where['type'] = "经典程序";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");
	$this->display();
    }

    public function claContent() {
	CommonAction::footer();

	$tbName = "Practice";
	$sessionType = "classics";
	$where['type'] = "经典程序";

	CommonAction::scanClick($tbName, $sessionType, $where);


	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    /*
     * 学生设计
     */

    public function design() {

	$tbName = "Practice";
	$where['type'] = "学生设计";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");
	$this->display();
    }

    public function desContent() {
	CommonAction::footer();

	$tbName = "Practice";
	$sessionType = "design";
	$where['type'] = "学生设计";

	CommonAction::scanClick($tbName, $sessionType, $where);


	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    public function upFen() {
	$tbName = "Practice";
	$sessionType = "design";
	$data['type'] = "学生设计";
	$tbName = M($tbName);
	$data['author'] = trim($_POST['name']);
	$data['title'] = trim($_POST['title']);
	$data['content'] = trim($_POST['content']);

	$data['time'] = date("Y-m-d H:i:s");

	$result = $tbName->data($data)->add();

	if ($result == TRUE) {
	    $this->success("分享成功", $jumpUrl = "__URL__/design");
	} else {
	    $this->error("分享失败");
	}
    }

    /*
     * 教师解惑
     */

    public function disabuse() {



	$tbName = "Practice";
	$where['type'] = "教师解惑";

	CommonAction::footer();
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");
	$this->display();
    }

    public function disContent() {
	CommonAction::footer();

	$tbName = "Practice";
	$sessionType = "disabuse";
	$where['type'] = "教师解惑";

	CommonAction::scanClick($tbName, $sessionType, $where);


	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

}
