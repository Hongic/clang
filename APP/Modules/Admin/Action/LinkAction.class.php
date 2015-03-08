<?php

/*
 * 功能：友情链接
 */

class LinkAction extends CommonAction {
    /*
     * 查看信息
     */

    public function browse() {

        CommonAction::scan("Link");
        $this->display();
    }

    /*
     * 添加一条信息
     */

    public function add() {

        if (!isset($_POST["submit"])) {
            $this->display();
        } else {

            $tb = M('Link');
            $data['title'] = trim($_POST['title']);
            $data['link'] = trim($_POST['link']);
            $data['rank'] = trim($_POST['rank']);
            $data['author'] = $_SESSION['name'];
            $data['time'] = date("Y-m-d H:i:s");
            $result = $tb->data($data)->add();
            if ($result) {
                $this->success("成功添加了一条数据", $jumpUrl = '__URL__/browse');
            } else {
                $this->error("添加失败");
            }
        }
    }

    /*
     * 删除一条信息
     */

    public function delete() {
        CommonAction::del("Link");
    }

    /*
     * 编辑信息
     */

    public function edit() {
        CommonAction::edit("Link");
        $this->display();
    }

    /*
     * 更新信息
     */

    public function update() {
        if ($_POST['submit'] == "") {
            $this->error("操作错误。。。");
        } else {
            $upid = trim($_POST['upid']);
            if ($upid == "") {
                $this->error("非法操作");
            } else {
                $tb = M('Link');
                $where['id'] = $upid;
                $data['title'] = trim($_POST['title']);
                $data['link'] = trim($_POST['link']);
                $data['rank'] = trim($_POST['rank']);
                $result = $tb->where($where)->data($data)->save();
                if ($result) {
                    $this->success("数据修改成功", $jumpUrl = '__URL__/browse');
                } else {
                    $this->error("修改失败");
                }
            }
        }
    }

}
