<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {

    public function index() {
        $this->login();
    }

    public function left() {
        $this->display();
    }

    public function right() {
        $time = date("Y 年 m 月 d 日   H:i:s");
        $name = $_SESSION['name'];
        $this->assign("name", $name);
        $this->assign("time", $time);
        $this->display();
    }

    public function login() {
        $this->display();
    }

    public function loginCheck() {
        
    }

}
