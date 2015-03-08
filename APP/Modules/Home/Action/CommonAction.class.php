<?php

/*
 * 功能：公共的方法操作（公共模板）,没有 display()
 */

class CommonAction extends Action {
    /*     * ******************************************************************************
     *         页尾数据处理 调用各种私有方法
     * 
     */

    public function footer() {
	CommonAction::copyRight();
	CommonAction::youlink();
	CommonAction::jieshao();
    }

    /*
     *     版权信息
     */

    private function copyRight() {
	$tb = M('About');
	$where['type'] = "版权信息";
	$copyRight = $tb->where($where)->order("id desc")->limit("1")->select();
	$this->assign("copyRight", $copyRight);
    }

    /*
     *     友情链接
     */

    protected function youlink() {
	$tb = M('Link');
	$youlink = $tb->order("rank asc")->limit("0,6")->select();

	$this->assign("youlink", $youlink);
    }

    /*
     *      介绍
     */

    private function jieshao() {
	$tb = M("About");
	$where['type'] = "关于我们";
	$jieshao = $tb->where($where)->order("id desc")->limit("0,1")->getField("content");
	//var_dump($jieshao);
	//exit();
	$this->assign("jieshao", $jieshao);
    }

    /*
     * 分页浏览
     */

    public function scan($tbName, $where = "", $pageSize = "2", $order = "id  desc") {
	import("@.ORG.Page");
	$tb = M($tbName);
	$count = $tb->where($where)->count();
	$newPage = new Page($count, $pageSize);
	$newPage->setConfig('header', '记录');
	$newPage->setConfig('theme', "%header% %nowPage%/%totalPage% 页 %upPage% %first% %prePage% %linkPage% %nextPage% %end% %downPage%");


	$result = $tb->where($where)->order($order)->limit($newPage->firstRow . ',' . $newPage->listRows)->select();

	//var_dump($result);

	$this->assign('result', $result);
	// $show  显示分页栏
	$show = $newPage->show();
	if ($count >= $pageSize) {
	    $this->assign('page', $show);
	}
    }

    /*
     *                               页尾结束
     * ********************************************************************************************
     */

    /*
     * ********************************************************************************************
     * 
     * 				      内容分篇
     * 
     * $tbName          数据库名
     * 
     * $sessionType     session 的类型
     * 
     * $type            类型
     */

    public function scanClick($tbName, $sessionType, $where = "") {
	$tb = M($tbName);
	session_start();
	$id = trim($_GET['id']);
	$seid = $sessionType . "-" . $id;

	$where['id'] = trim($_GET['id']);
	if ($_SESSION[$seid] == null) {
	    $newid = $tb->where($where)->getField("click");
	    $data['click'] = $newid + 1;
	    $_SESSION[$seid] = trim($_GET['id']);
	    $tb->where($where)->data($data)->save();
	}
	$res = $tb->where($where)->order("id desc")->select();
	$this->assign("res", $res);

	CommonAction::up($tbName, $where = "");
	CommonAction::next($tbName, $where = "");
    }

    /*
     *  上一篇 upid > nowid  desc 1
     *   $tbName  表名
     */

    public function up($tbName, $where = "") {
	$id = trim($_GET['id']);
	$tb = M($tbName);

	$where['id'] = array("gt", $id);
	$up = $tb->where($where)->order("id asc")->limit("0,1")->select();
	$this->assign("up", $up);
    }

    /*
     *  下一篇 nextid < nowid  asc 1
     * $tbName  表名
     */

    public function next($tbName, $where = "") {
	$id = trim($_GET['id']);
	$tb = M($tbName);

	$where['id'] = array("lt", $id);
	$next = $tb->where($where)->order("id desc")->limit("0,1")->select();
	$this->assign("next", $next);
    }

    /*
     *                                  内容分篇
     * ******************************************************************************************
     */

    /*
     * *****************************************************************************************
     *                                        排行榜
     * $tbName   数数据库名
     * 
     * $where    类型条件
     * 
     * $order    排序规则
     * 
     * $limit    显示前几条记录
     */

    public function rankList($tbName, $where = "", $order = "click desc", $limit = "0,10") {

	$tb = M($tbName);
	$rank = $tb->where($where)->order($order)->limit($limit)->select();
	$this->assign("rank", $rank);
    }

    /*
     *                                       排行榜
     * *******************************************************************************************
     */
}
