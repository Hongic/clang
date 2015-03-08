<?php

/*
 * 功能：本地视频
 */

class LocalAction extends CommonAction {

    public $tbName = "Local";
    public $picDir = "./Uploads/Video/Pic/";
    public $videoDir = "./Uploads/Video/Video/";

    /*
     * 添加数据   add()
     * 
     * $picDir 存储文件
     * 
     * $tbName  数据库名
     * 
     * $type    类型
     */

    public function add() {
        $tbName = $this->tbName;
        $picDir = $this->picDir;
        $videoDir = $this->videoDir;

        if (!isset($_POST["submit"])) {
            $mmax = ini_get('upload_max_filesize');
            $this->assign("mmax", $mmax);
            $this->display();
        } else {
            // 截图
            if (!is_dir($picDir)) {
                if (mkdir($picDir, $mode = 0777) == FALSE) {
                    $thi->error("创建 $picDir 文件夹失败");
                }
            }
            // 视频
            if (!is_dir($videoDir)) {
                if (mkdir($videoDir, $mode = 0777) == FALSE) {
                    $thi->error("创建 $videoDir 文件夹失败");
                }
            }

            $tbName = M($tbName);

            // 截图
            $fileTmp = trim($_FILES['pic']['tmp_name']);

            if (!is_uploaded_file($fileTmp)) {
                $this->error("非法执行了上传文件操作");
            } else {
                $fileName = trim($_FILES['pic']['name']);
                $fileSize = trim($_FILES['pic']['size']);
                $fileType = substr($fileName, strripos($fileName, "."));
                $dateTime = time();
                $path = $picDir . $dateTime . $fileType;

                if (!move_uploaded_file($fileTmp, $path)) {
                    $this->error("上传文件失败");
                }
                $data['pic'] = $dateTime . $fileType;
            }



            // 视频
            /*
             *   处理上传文件的信息
             */
            $fileTmp = trim($_FILES['video']['tmp_name']);

            if (!is_uploaded_file($fileTmp)) {
                $this->error("非法执行了上传文件操作");
            } else {
                $fileName = trim($_FILES['video']['name']);
                $fileSize = trim($_FILES['video']['size']);
                $fileType = substr($fileName, strripos($fileName, "."));
                $dateTime = date("YmdHis");
                $path = $videoDir . $dateTime . $fileType;

                if (!move_uploaded_file($fileTmp, $path)) {
                    $this->error("上传文件失败");
                }
                $data['video'] = $dateTime . $fileType;
            }


            $data['title'] = trim($_POST['title']);
            $data['content'] = trim($_POST['content']);
            $data['author'] = $_SESSION['name'];
            $data['time'] = date("Y-m-d H:i:s");

            // 网盘地址
            $data['yun'] = trim($_POST['yun']);


            $result = $tbName->where($where)->data($data)->add();
            if ($result == TRUE) {
                $this->success("数据入库成功", $jumpUrl = "__URL__/browse");
            } else {
                $this->error("数据入库失败");
            }
        }
    }

    /*
     * 浏览数据
     */

    public function browse() {
        $tbName = $this->tbName;
        TeamAction::scan($tbName);
        $this->display();
    }

    /*
     * 编辑数据
     */

    public function edit() {
        $tbName = $this->tbName;
        TeamAction::edit($tbName);
        $mmax = ini_get('upload_max_filesize');
        $this->assign("mmax", $mmax);
        $this->display();
    }

    /*
     * 更新       update()
     * 
     * $picDir   文件名  "./Uploads/Teachers/"
     * 
     * $tbName    数据库名
     * 
     * $
     */

    public function update() {
        $tbName = $this->tbName;

        $picDir = $this->picDir;
        $videoDir = $this->videoDir;
        $upid = trim($_POST['upid']);


        if ($upid == "") {
            $this->error("非法操作");
        } else {
            $fileTmp = trim($_FILES['pic']['tmp_name']);
            if (!$fileTmp == "") {
                $fileName = trim($_FILES['pic']['name']);
                $fileSize = trim($_FILES['pic']['size']);
                $fileType = substr($fileName, strripos($fileName, "."));
                $dateTime = time();
                $path = $picDir . $dateTime . $fileType;

                if (!move_uploaded_file($fileTmp, $path)) {
                    $this->error("上传文件失败");
                }
                $data['pic'] = $dateTime . $fileType;
            }
            $fileTmpVideo = trim($_FILES['video']['tmp_name']);
            if (!$fileTmpVideo == "") {
                $fileNameVideo = trim($_FILES['video']['name']);
                $fileSizeVideo = trim($_FILES['video']['size']);
                $fileTypeVideo = substr($fileNameVideo, strripos($fileNameVideo, "."));
                $dateTimeVideo = time();
                $pathVideo = $videoDir . $dateTimeVideo . $fileTypeVideo;

                if (!move_uploaded_file($fileTmpVideo, $pathVideo)) {
                    $this->error("上传文件失败");
                }
                $data['video'] = $dateTimeVideo . $fileTypeVideo;
            }


            $tb = M($tbName);
            $data['title'] = trim($_POST['title']);
            $data['content'] = trim($_POST['content']);
            $data['time'] = date("Y-m-d H:i:s");

            // 网盘地址
            $data['yun'] = trim($_POST['yun']);
            $where['id'] = $upid;
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

    public function delete() {
        $tbName = $this->tbName;
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
