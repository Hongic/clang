<?php

/*
 * 教学成果：学生荣誉、教师荣誉
 */

class ResultsAction extends CommonAction {

    public $tbName = "Results";

    /*
     * 学生荣誉
     */

    public function student() {
	CommonAction::footer();
	$tbName = $this->tbName;

	$where['type'] = "学生荣誉";


	CommonAction::scan($tbName, $where, $pageSize = "8", $order = "id  desc");


	$this->display();
    }

    public function stuContent() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "student";
	$where['type'] = "学生荣誉";

	CommonAction::scanClick($tbName, $sessionType, $where);


	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    /*
     * 教师荣誉
     */

    public function teacher() {
	CommonAction::footer();
	$tbName = $this->tbName;

	$where['type'] = "教师荣誉";


	CommonAction::scan($tbName, $where, $pageSize = "8", $order = "id  desc");


	$this->display();
    }

    public function teaContent() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "teacher";
	$where['type'] = "教师荣誉";

	CommonAction::scanClick($tbName, $sessionType, $where);


	CommonAction::rankList($tbName, $where, $order = "click desc", $limit = "0,16");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

}
