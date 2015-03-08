<?php

/*
 * 功能：最新公告
 */

class NoticeAction extends CommonAction {
    /*
     * 查看信息
     */

    public function browse() {
        $where['type'] = "最新公告";
        CommonAction::scan("Notice", $where);
        $this->display();
    }

    /*
     * 添加一条信息
     */

    public function add() {

        if (!isset($_POST["submit"])) {
            $this->display();
        } else {
            $type = "最新公告";
            $tb = M('Notice');
            $data['title'] = trim($_POST['title']);
            $data['content'] = trim($_POST['content']);
            $data['type'] = $type;
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
        CommonAction::del("Notice");
    }

    /*
     * 编辑信息
     */

    public function edit() {
        CommonAction::edit("Notice");
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
                $tb = M('Notice');
                $where['id'] = $upid;
                $data['title'] = trim($_POST['title']);
                $data['content'] = trim($_POST['content']);
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
