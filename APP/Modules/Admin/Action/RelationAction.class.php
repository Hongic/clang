<?php

/*
 * 功能：联系我们
 */

class RelationAction extends CommonAction {

    public $type = "联系我们";
    public $tbName = "About";

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
