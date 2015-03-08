<?php

/*
 * 功能：教师荣誉
 */

class TeacherAction extends CommonAction {

    public $type = "教师荣誉";
    public $dirName = "./Uploads/Results/";
    public $tbName = "Results";

    /*
     * 添加数据
     */

    public function add() {

        if (!isset($_POST['submit'])) {
            $this->display();
        } else {

            $dirName = $this->dirName;
            $tbName = $this->tbName;
            $type = $this->type;
            TeamAction::add($dirName, $tbName, $type);
        }
    }

    /*
     * 浏览数据
     */

    public function browse() {

        $where['type'] = $this->type;
        $tbName = $this->tbName;
        TeamAction::scan($tbName, $where);
        $this->display();
    }

    /*
     * 编辑数据
     */

    public function edit() {
        $tbName = $this->tbName;
        TeamAction::edit($tbName);
        $this->display();
    }

    /*
     * 更新数据
     */

    public function update() {
        $dirName = $this->dirName;
        $tbName = $this->tbName;
        TeamAction::update($dirName, $tbName);
    }

    /*
     * 删除数据
     */

    public function delete() {
        $tbName = $this->tbName;
        TeamAction::del($tbName);
    }

}
