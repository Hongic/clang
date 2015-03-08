<?php

/*
 * 功能：电子书
 */

class EbookAction extends CommonAction {

    public $type = "电子书";
    public $tbName = "Resources";

    /*
     * 添加数据
     */

    public function add() {

        if (!isset($_POST['submit'])) {
            $this->display();
        } else {


            $tbName = $this->tbName;
            $type = $this->type;
            ResourcesAction::add($tbName, $type);
        }
    }

    /*
     * 浏览数据
     */

    public function browse() {
        $tbName = $this->tbName;
        $where['type'] = $this->type;
        ResourcesAction::scan($tbName, $where);
        $this->display();
    }

    /*
     * 编辑数据
     */

    public function edit() {
        $tbName = $this->tbName;
        ResourcesAction::edit($tbName);
        $this->display();
    }

    /*
     * 更新数据
     */

    public function update() {
        $tbName = $this->tbName;
        ResourcesAction::update($tbName);
    }

    /*
     * 删除数据
     */

    public function delete() {
        $tbName = $this->tbName;
        ResourcesAction::del($tbName);
    }

}
