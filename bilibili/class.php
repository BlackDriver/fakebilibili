<?php
class loginController
{
    
    public $dbh;
    public $lifetime = 3600*24*30;
    public function __construct ($dbh)
    {
        $this->dbh = $dbh;
    }

    public function login($username, $password)
    {
        if ($this->isLogin())
            return header('Location:index.php');

        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $hash=md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' and password='$hash'";
        $res = mysqli_query($mysqli,$sql);
        $rows= mysqli_num_rows($res);

        if ($user->fetchColumn()) {
            $this->addSession('username', $username);
            return header('Location:index.php');
        }

        return false;
    }

    private function isLogin() {
        if (isset($_SESSION['username'])) {
            return true;
        }

        return false;
    }

    private function addSession($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function logout()
    {
        setcookie(session_name(), '', time() + $this->lifetime, '', '.www.meituan233.trade');
        session_destroy();
        return header('Location:login.html');
    }
}

class session {

    public $ssid;
    public $lifetime = 3600*24*30;
    public function __construct()
    {
        session_save_path('./session/');
        session_set_cookie_params($this->lifetime, '/', '.www.meituan233.trade', false, true);
    }
}