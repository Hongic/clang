<?php

/*
 * 功能：用户管理
 */

class UserAction extends CommonAction {
    /*
     * 添加一条数据
     */

    public function add() {
        $this->checkUser();
        if (!isset($_POST["submit"])) {
            $this->display();
        } else {
            $tb = M("Admin");
            $data['name'] = trim($_POST['name']);
            $pwd = trim($_POST['pwd']);
            $data['pwd'] = md5(TOKITWO . md5($pwd . TOKIONE));
            $data['level'] = trim($_POST['level']);

            $data['time'] = date("Y-m-d H:i:s");
            $result = $tb->data($data)->add();
            if ($result) {
                $this->success("成功添加用户", $jumpUrl = "__URL__/browse");
            } else {
                $this->error("添加用户失败。。。");
            }
        }
    }

    /*
     *  浏览数据
     */

    public function browse() {
        CommonAction::scan('Admin', $where);

        $this->display();
    }

    /*
     * 删除一条数据
     */

    public function delete() {
        $this->checkUser();
        CommonAction::del('Admin');
    }

    /*
     * 编辑一条数据
     */

    public function edit() {
        session_start();
        $where['name'] = $_SESSION['name'];
        $tb = M('Admin');
        $level = $tb->where($where)->getField("level");
        if ($level == "超级") {
            CommonAction::edit('Admin');
        } else {
            $oneid = $_GET['edid'];
            $this->checkOneself($oneid);
            CommonAction::edit('Admin');
        }


        $this->display();
    }

    /*
     *  更新一条数据
     */

    public function update() {

        $this->changePwd("Admin");
    }

    /*
     * 新旧密码的处理
     */

    private function changePwd($tbName) {
        if ($_POST['submit'] == "") {
            $this->error("操作错误。。。");
        } else {
            $upid = trim($_POST['upid']);
            $pwd = trim($_POST['pwd']);

            $tb = M($tbName);
            $where['id'] = $upid;
            $data['pwd'] = md5(TOKITWO . md5($pwd . TOKIONE));
            $result = $tb->where($where)->save($data);
            if ($result) {
                $this->success("用户修改密码成功", $jumpUrl = '__URL__/browse');
            } else {
                $this->error("密码修改失败。。。");
            }
        }
    }

    /*
     * 权限验证
     */

    private function checkUser() {
        session_start();
        $where['name'] = $_SESSION['name'];
        $tb = M('Admin');
        $level = $tb->where($where)->getField("level");
        if ($level != "超级") {
            $this->error("对不起，您的权限不足！！！");
        }
    }

    private function checkOneself($oneid) {
        session_start();
        $where['name'] = $_SESSION['name'];
        $tb = M('Admin');
        $level = $tb->where($where)->getField("level");
        $id = $tb->where($where)->getField("id");
        if ($id != $oneid) {
            $this->error("对不起，您的权限不足！！！");
        }
    }

}
