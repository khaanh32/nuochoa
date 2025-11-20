<?php

class authmodel extends DModel {
    
    public function __construct() {
        parent::__construct();
    }

    // Đăng nhập tự động phát hiện Admin hoặc User (ĐÃ CẬP NHẬT)
    public function auto_login($username_or_email, $password) {
        // Kiểm tra xem input có phải là email không (có chứa @)
        if (strpos($username_or_email, '@') !== false) {
            // Đây là email => chỉ tìm trong tbl_customer
            return $this->check_customer_login($username_or_email, $password);
        } else {
            // Không có @ => chỉ tìm trong tbl_admin
            return $this->check_admin_login($username_or_email, $password);
        }
    }

    // Kiểm tra đăng nhập Admin
    private function check_admin_login($username, $password) {
        $sql = "SELECT * FROM tbl_admin WHERE username = :username AND password = :password";
        $data = array(
            ':username' => $username,
            ':password' => $password
        );
        $result = $this->db->select($sql, $data);
        
        if (count($result) > 0) {
            // Thêm flag để phân biệt admin
            $result[0]['user_type'] = 'admin';
            return $result[0];
        }
        return false;
    }

    // Kiểm tra đăng nhập Customer (chỉ dùng email)
    private function check_customer_login($email, $password) {
        $sql = "SELECT * FROM tbl_customer WHERE customer_email = :email AND customer_password = :password";
        $data = array(
            ':email' => $email,
            ':password' => $password
        );
        $result = $this->db->select($sql, $data);
        
        if (count($result) > 0) {
            // Thêm flag để phân biệt customer
            $result[0]['user_type'] = 'customer';
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