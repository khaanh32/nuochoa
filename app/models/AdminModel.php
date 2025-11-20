<?php
class AdminModel extends DModel {

    // Hàm check login gốc của bạn
    public function checkLogin($username, $password) {
        $sql = "SELECT * FROM tbl_admin WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['username' => $username, 'password' => $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về thông tin admin nếu đúng
    }

    // === CÁC HÀM MỚI ĐỂ LẤY SỐ LIỆU DASHBOARD ===

    /**
     * Đếm tổng số khách hàng
     */
    public function countCustomers() {
        $sql = "SELECT COUNT(*) as total FROM tbl_customer";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }

    /**
     * Đếm tổng số sản phẩm
     */
    public function countProducts() {
        $sql = "SELECT COUNT(*) as total FROM tbl_product";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }

    /**
     * Đếm tổng số đơn hàng (bạn có thể đổi '0' thành status khác)
     * 0: Đang xử lý
     */
    public function countNewOrders() {
        $sql = "SELECT COUNT(*) as total FROM tbl_order WHERE order_status = 0";
        $result = $this->db->select($sql);
        return $result[0]['total'];
    }
}
?>