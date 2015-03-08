<?php

/*
 * 教学团队：教师队伍、科研项目、科研论文
 */

class TeamAction extends Action {

    public $tbName = "Team";

    /*
     * 教师队伍
     */

    public function teachers() {
	CommonAction::footer();
	$tbName = $this->tbName;
	$where['type'] = "教师队伍";
	CommonAction::scan($tbName, $where, $pageSize = "8", $order = "id  desc");
	$this->display();
    }

    public function tContent() {
	CommonAction::footer();
	$where['id'] = $_GET['id'];
	$tbName = $this->tbName;
	$tb = M($tbName);
	$where['type'] = "教师队伍";
	$tcontent = $tb->where($where)->select();

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);

	$this->assign("tcontent", $tcontent);
	$this->display();
    }

    /*
     * 科研项目
     */

    public function projects() {
	CommonAction::footer();
	$tbName = $this->tbName;
	$where['type'] = "科研项目";
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	$this->rank("科研项目");

	$this->display();
    }

    public function pContent() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "projects";
	$where['type'] = "科研项目";

	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rank("科研项目");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

    /*
     * 阅读榜
     */

    private function rank($type) {
	$tbName = $this->tbName;
	$tb = M($tbName);
	$where['type'] = $type;
	$rank = $tb->where($where)->order("click desc")->limit("0,20")->select();
	$this->assign("rank", $rank);
    }

    /*
     * 科研论文
     */

    public function thesis() {
	CommonAction::footer();
	$tbName = $this->tbName;
	$where['type'] = "科研论文";
	CommonAction::scan($tbName, $where, $pageSize = "5", $order = "id  desc");

	$this->rank("科研论文");

	$this->display();
    }

    public function thContent() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "projects";
	$where['type'] = "科研论文";

	CommonAction::scanClick($tbName, $sessionType, $where);


	$this->rank("科研论文");

	CommonAction::up($tbName, $where);
	CommonAction::next($tbName, $where);


	$this->display();
    }

}
