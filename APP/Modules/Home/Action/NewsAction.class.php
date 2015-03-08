<?php

/*
 * 新闻资讯：最新公告、
 */

class NewsAction extends Action {

    public $tbName = "News";

    public function index() {
	CommonAction::footer();
	$this->browse();
	$this->notice();

	$this->display();
    }

    /*
     * 最新公告
     */

    private function notice() {
	$tbName = "Notice";
	$tb = M($tbName);
	$where['type'] = "最新公告";
	$notice = $tb->where($where)->order("id desc")->limit("1")->getField("content");
	$this->assign("notice", $notice);
    }

    /*
     * 新闻列表
     */

    private function browse() {
	$tb = $this->tbName;

	CommonAction::scan($tb, $where = "", $pageSize = "5", $order = "id  desc");
    }

    /*
     * 新闻的详细内容
     */

    public function content() {
	CommonAction::footer();

	$tbName = $this->tbName;
	$sessionType = "news";


	CommonAction::scanClick($tbName, $sessionType);


	$this->news_rank();

	CommonAction:: up($tbName);
	CommonAction::next($tbName);


	$this->display();
    }

    /*
     * 新闻点击榜
     */

    private function news_rank() {
	$tbName = $this->tbName;
	CommonAction:: rankList($tbName, $where = "", $order = "click desc", $limit = "0,10");
    }

}
