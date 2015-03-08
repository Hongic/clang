<?php

/*
 * 关于我们、联系我们、常见问题
 */

class AboutAction extends CommonAction {
    /*
     * 关于我们
     */

    public function us() {
	CommonAction::footer();
	$tb = M("About");
	$where['type'] = "关于我们";
	$us = $tb->where($where)->order("id desc")->limit("1")->select();
	$this->assign("us", $us);
	$this->display();
    }

    /*
     * 联系我们
     */

    public function relation() {
	CommonAction::footer();
	$tb = M("About");
	$where['type'] = "联系我们";
	$relation = $tb->where($where)->order("id desc")->limit("1")->select();
	$this->assign("relation", $relation);
	$this->display();
    }

    /*
     * 常见问题
     */

    public function fvq() {
	CommonAction::footer();
	$tbName = "Fvq";

	CommonAction::scan($tbName, $where = "", $pageSize = "5", $order = "id  desc");
	$this->display();
    }

}
