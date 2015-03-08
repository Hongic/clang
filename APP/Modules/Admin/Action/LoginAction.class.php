
<?php

/** + = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
 * 文件名 ：LoginAction.class.php
 *  功 能 ：
 *  编 码 ：UTF-8
 *  日 期 ：2013-5-12 23:53:29  
 *  作 者 ：Hong 
 *  版 权 ：版权归 Hong 所有
 *  工 具 ：NetBeans 7 作为主要的开发工具
 * + = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
 * */
class LoginAction extends Action {
    /*
     *    编写代码时请先写逻辑思路  (*^__^*) 嘻 嘻 …… 
     */

    private $name = null;
    private $pwd = null;

    /*
     *  登录失败或没有登陆时跳转到登陆页面:login()
     */

    public function login() {
        if ($_SESSION['name'] != null) {
            $this->success("你已经登陆过了...", $jumpUrl = "__APP__/Admin/Index/index");
        } else {
            $this->display();
        }
    }

    /*
     *  登陆验证:;loginCheck()
     */

    public function loginCheck() {
        header("Content-Type:text/html;charset=UTF-8");
        $this->postLoginForm();
        // echo "<br>" ;
        $this->mapping();
    }

    /*
     *  获取loginForm的数据：postLoginFrom()
     */

    private function postLoginForm() {

        $this->name = trim($_POST['name']);
        $this->pwd = md5(TOKITWO . md5($pwd . TOKIONE));
    }

    /*
     *  与数据库的数据进行匹配：mappingDate() 
     */

    private function mapping() {

        $user = M('Admin');
        $where['name'] = $this->name;
        $$where['pwd'] = $this->pwd;
        $userResult = $user->where($where)->select();
        if ($userResult) {
            $_SESSION['name'] = $this->name;
            $loginTime = date("Y-m-d H:i:s");
            $name = $_SESSION['name'];
            $nn = $user->where("name='$name'")->setField("loginTime", $loginTime);
            $this->success("登陆成功 :）", $jumpUrl = "__APP__/Admin/Index/index");
        } else {
            header("Content-Type:text/html;charset=UTF-8");
            echo "<script>alert('登陆失败');history.go(-1);</script>";
        }
    }

    /*
     * 退出登陆：logout()
     */

    public function logout() {
        if (isset($_SESSION['name']) && $_SESSION != null) {
            unset($_SESSION['name']);
            header("location:login");
        }
    }

}

?>
