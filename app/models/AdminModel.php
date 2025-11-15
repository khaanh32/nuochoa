<?php
class AdminModel extends DModel {
    public function checkLogin($username, $password) {
        $sql = "SELECT * FROM tbl_admin WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về thông tin admin nếu đúng
    }
}
?>