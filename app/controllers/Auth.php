<?php
class Auth extends DController {
    public function __construct() {
        parent::__construct();
        $this->authmodel = $this->load->model('authmodel');
    }

    public function login() {
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function register() {
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function process_login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if (empty($username) || empty($password)) {
            header("Location: /web_perfume/auth/login?error=empty_fields");
            exit();
        }

        if ($role == 'admin') {
            $admin = $this->authmodel->check_admin_login($username, $password);
            if ($admin) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['admin_username'] = $admin['username'];
                header("Location: /web_perfume/admin");
                exit();
            } else {
                header("Location: /web_perfume/auth/login?error=Sai thông tin đăng nhập");
                exit();
            }
        } else { // role is user
            $customer = $this->authmodel->check_customer_login($username, $password);
            if ($customer) {
                $_SESSION['user_logged_in'] = true;
                $_SESSION['customer_id'] = $customer['customer_id'];
                $_SESSION['customer_name'] = $customer['customer_name'];
                header("Location: /web_perfume/");
                exit();
            } else {
                header("Location: /web_perfume/auth/login?error=Sai thông tin đăng nhập");
                exit();
            }
        }
    }
    public function logout() {
        session_start();
        session_destroy();
        header("Location: /web_perfume/auth/login");
        exit();
    }
}
?>