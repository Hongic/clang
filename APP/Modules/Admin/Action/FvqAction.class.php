<?php

/*
 * 功能：关于我们
 */

class FvqAction extends CommonAction {

    public $tbName = "Fvq";

    /*
     * 添加数据
     */

    public function add() {

        if (!isset($_POST['submit'])) {
            $this->display();
        } else {


            $tbName = $this->tbName;

            PracticeAction::add($tbName);
        }
    }

    /*
     * 浏览数据
     */

    public function browse() {
        $tbName = $this->tbName;

        PracticeAction::scan($tbName);
        $this->display();
    }

    /*
     * 编辑数据
     */

    public function edit() {
        $tbName = $this->tbName;
        PracticeAction::edit($tbName);
        $this->display();
    }

    /*
     * 更新数据
     */

    public function update() {
        $tbName = $this->tbName;
        PracticeAction::update($tbName);
    }

    /*
     * 删除数据
     */

    public function delete() {
        $tbName = $this->tbName;
        PracticeAction::del($tbName);
    }

}
