<?php

/*
 * 功能：经典程序
 */

class ClassicsAction extends CommonAction {

    public $type = "经典程序";
    public $tbName = "Practice";

    /*
     * 添加数据
     */

    public function add() {

        if (!isset($_POST['submit'])) {
            $this->display();
        } else {


            $tbName = $this->tbName;
            $type = $this->type;
            PracticeAction::add($tbName, $type);
        }
    }

    /*
     * 浏览数据
     */

    public function browse() {
        $tbName = $this->tbName;
        $where['type'] = $this->type;
        PracticeAction::scan($tbName, $where);
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
