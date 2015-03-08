<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index() {
	CommonAction::footer();

	$this->des();
	$this->nes();
	$this->notice();

	$this->pic();
	$this->tea();

	$this->display();
    }

    /*
     * 最新公告
     */

    private function notice() {
	$tbName = "Notice";
	$tbName = M($tbName);
	$where['type'] = "最新公告";
	$notice = $tbName->where($where)->order("id desc")->limit("1")->getField("content");
	$this->assign("notice", $notice);
    }

    /*
     * 最新资讯
     */

    private function nes() {
	$tbName = "News";
	$tbName = M($tbName);

	$nes = $tbName->order("id desc")->limit("0,10")->getField("id,title,time");
	$this->assign("nes", $nes);
    }

    /*
     * 学生设计
     */

    private function des() {
	$tbName = "Practice";
	$tbName = M($tbName);
	$where['type'] = "学生设计";
	$des = $tbName->where($where)->order("id desc")->limit("0,10")->getField("id,title,time");
	$this->assign("des", $des);
    }

    /*
     * 荣誉图
     */

    private function pic() {
	$tb = M("Results");
	$pic = $tb->order("id desc")->limit("0,5")->select();
	$this->assign("pic", $pic);
    }

    /*
     * 教师队伍
     */

    private function tea() {
	$tb = M("Team");
	$where['type']="教师队伍";
	$pic = $tb->where($where)->order("id desc")->limit("0,5")->select();
	
	$this->assign("tea", $pic);
    }

}
