<?php

/*
 * 功能：课程大纲
 */

class OutlineAction extends CommonAction {

    public $type = "课程大纲";
    public $dirName = "./Uploads/Team/Outline/";

    /*
     * 添加数据
     */

    public function add() {

        if (!isset($_POST['submit'])) {
            $this->display();
        } else {

            $dirName = $this->dirName;
            $tbName = "Team";
            $type = $this->type;
            TeamAction::add($dirName, $tbName, $type);
        }
    }

    /*
     * 浏览数据
     */

    public function browse() {

        $where['type'] = $this->type;
        TeamAction::scan("Team", $where);
        $this->display();
    }

    /*
     * 编辑数据
     */

    public function edit() {
        TeamAction::edit("Team");
        $this->display();
    }

    /*
     * 更新数据
     */

    public function update() {
        $dirName = $this->dirName;
        TeamAction::update($dirName, "Team");
    }

    /*
     * 删除数据
     */

    public function delete() {
        TeamAction::del("Team");
    }

}
