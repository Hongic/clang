<?php

/*
 * 功能：电子书、开源代码、视频下载
 */

class ResourcesAction extends Action {
    /*
     * 添加数据   add()
     * 
     * $dirName 存储文件
     * 
     * $tbName  数据库名
     * 
     * $type    类型
     */

    public function add($tbName, $type) {

        if (!isset($_POST["submit"])) {
            $this->display();
        } else {


            $tbName = M($tbName);
            $data['title'] = trim($_POST['title']);
            $data['content'] = trim($_POST['content']);
            $data['yun'] = trim($_POST['yun']);
            $data['author'] = $_SESSION['name'];
            $data['time'] = date("Y-m-d H:i:s");

            $data['type'] = $type;


            $result = $tbName->where($where)->data($data)->add();
            if ($result == TRUE) {
                $this->success("数据入库成功", $jumpUrl = "__URL__/browse");
            } else {
                $this->error("数据入库失败");
            }
        }
    }

    /*
     * 浏览数据 scan()
     * 
     * $tbName  数据库名
     * $type    类型 
     * $where   条件
     * $order   排序
     */

    public function scan($tbName, $where = "", $pageSize = "10", $order = "id  desc") {
        import("@.ORG.Page");
        $tb = M($tbName);
        $count = $tb->where($where)->count();
        $newPage = new Page($count, $pageSize);
        $newPage->setConfig('header', '记录');
        $newPage->setConfig('theme', "%header% %nowPage%/%totalPage% 页 %upPage% %first% %prePage% %linkPage% %nextPage% %end% %downPage%");


        $result = $tb->where($where)->order($order)->limit($newPage->firstRow . ',' . $newPage->listRows)->select();

        $this->assign('result', $result);
// $show  显示分页栏
        $show = $newPage->show();
        if ($count >= $pageSize) {
            $this->assign('page', $show);
        }
    }

    /*
     *   编辑     edit()
     * 
     *   $tbName  数据表名
     * 
     *   $delid   GET 传过来的id
     */

    public function edit($tbName) {
        $edlid = trim($_GET['edid']);
        if ($edlid == "") {
            $this->error("非法操作");
        } else {
            $tb = M($tbName);
            $where['id'] = $edlid;
            $result = $tb->where($where)->select();
            $this->assign("result", $result);
        }
    }

    /*
     * 更新       update()
     * 
     *  
     * $tbName    数据库名
     * 
     * $
     */

    public function update($tbName) {
        $upid = trim($_POST['upid']);
        $tb = M($tbName);
        $where['id'] = $upid;
        if ($upid == "") {
            $this->error("非法操作");
        } else {

            $data['title'] = trim($_POST['title']);
            $data['content'] = trim($_POST['content']);
            $data['yun'] = trim($_POST['yun']);
            $data['time'] = date("Y-m-d H:i:s");


            $result = $tb->where($where)->data($data)->save();
            if ($result) {
                $this->success("数据修改成功", $jumpUrl = '__URL__/browse');
            } else {
                $this->error("修改失败");
            }
        }
    }

    /*
     *   删除     del()
     * 
     *   $tbname  数据表名
     * 
     *   $delid   get穿过来的id
     */

    public function del($tbName) {
        $delid = trim($_GET['delid']);
        if ($delid == "") {
            $this->error("非法操作");
        } else {
            $tb = M($tbName);
            $where['id'] = $delid;
            $result = $tb->where($where)->delete();
            if ($result) {
                $this->success("成功删除一条数据", $jumpUrl = "__URL__/browse");
            } else {
                $this->error("删除失败。。。");
            }
        }
    }

}
