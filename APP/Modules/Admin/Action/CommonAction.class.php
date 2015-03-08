<?php

/*
 * 功能：公共函数库
 */

class CommonAction extends Action {

    // 上传图片的地址
    public $images = "";

    /*     * *************************************************************************
     *                           登陆
     * *************************************************************************
     */
    /*
     * 构造函数，优先级最高，直接调用LoginChcek
     */

    public function __construct() {
        header("Content-type:text/html;charset=utf-8");
        parent::__construct();
        $this->checkLogin();
    }

    /*
     * 是否登陆检测：如果已登陆就跳转到index.html，否则跳到 login.html
     */

    private function checkLogin() {
        if (!isset($_SESSION['name']) && $_SESSION['name'] == NULL) {
            $this->error("你还没有登录", $jumpUrl = "__APP__/Admin/Login/login");
        }
    }

    /*
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
     *                                     C U R D
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
     * 
     */



    /*
     *    删除  del()
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

    /*
     *    编辑   edit()
     * 
     *   $tbname  数据表名
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
     *      浏览   scan()
     * 
     *  $tbName  数据表名
     *  $where   条件 注意类型 type
     */

    public function scan($tbName, $where = "", $pageSize = "16", $order = "id  desc") {
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
     * *********************************************************************************************
     */

    /*
     * 图片上传 uploads()
     * 
     * $dirName  存储文件的文件夹  "/Uploads/Teachers/"
     * 
     * $tbName   数据库名
     * 
     * $where    条件
     */

    public function uploadPic($dirName) {
        if (!is_dir($dirName)) {
            if (mkdir($dirName, $mode = 0777) == FALSE) {
                $thi->error("创建 $dirName 文件夹失败");
            }
        }

        import('@.ORG.UploadFile');
        // 实例化上传类
        $upload = new UploadFile();
        // 设置附件上传大小 3M
        $upload->maxSize = 3145728;
        // 设置附件上传类型
        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');
        //设置上传文件规则
        $upload->saveRule = 'time';
        // 缩略图的路径
        $upload->thumbPath = $dirName;
        //设置需要生成缩略图，仅对图像文件有效
        $upload->thumb = true;
        // 设置引用图片类库包路径
        $upload->imageClassPath = '@.ORG.Image';
        //设置需要生成缩略图的文件后缀
        $upload->thumbPrefix = 'm_,s_';  //生产2张缩略图
        //设置缩略图最大宽度
        $upload->thumbMaxWidth = '500,100';
        //设置缩略图最大高度
        $upload->thumbMaxHeight = '500,100';

        //删除原图
        $upload->thumbRemoveOrigin = TRUE;

        $upload->savePath = $dirName; // 设置附件上传目录
        if (!$upload->upload()) {
            // 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
        }

        $info = $upload->getUploadFileInfo();
        $this->images = $info[0]['savename'];
    }

}
