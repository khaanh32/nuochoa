<?php

class authmodel extends DModel {
    
    public function __construct() {
        parent::__construct();
    }

    // Kiểm tra đăng nhập Admin
    public function check_admin_login($username, $password) {
        $sql = "SELECT * FROM tbl_admin WHERE username = :username AND password = :password";
        $data = array(
            ':username' => $username,
            ':password' => $password
        );
        $result = $this->db->select($sql, $data);
        
        if (count($result) > 0) {
            return $result[0];
        }
        return false;
    }

    // Kiểm tra đăng nhập Khách hàng
    public function check_customer_login($username_or_email, $password) {
        $sql = "SELECT * FROM tbl_customer WHERE (customer_email = :username_or_email OR username = :username_or_email) AND customer_password = :password";
        $data = array(
            ':username_or_email' => $username_or_email,
            ':password' => $password
        );
        $result = $this->db->select($sql, $data);
        
        if (count($result) > 0) {
            return $result[0];
        }
        return false;
    }

    // Kiểm tra email đã tồn tại
    public function check_email_exists($email) {
        $sql = "SELECT * FROM tbl_customer WHERE customer_email = :email";
        $data = array(':email' => $email);
        $result = $this->db->select($sql, $data);
        
        return count($result) > 0;
    }

    // Thêm khách hàng mới
    public function insert_customer($table, $data) {
        return $this->db->insert($table, $data);
    }

}

?>