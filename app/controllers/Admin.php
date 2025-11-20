<?php
class Admin extends DController {
    public function __construct() {
        parent::__construct();
        // Tự động load AdminModel
        $this->adminModel = $this->load->model('adminmodel');
    }

    public function index() {
        // Lấy dữ liệu từ Model
        $data['customer_count'] = $this->adminModel->countCustomers();
        $data['product_count'] = $this->adminModel->countProducts();
        $data['order_count'] = $this->adminModel->countNewOrders();
        // (Bạn có thể thêm hàm tính doanh thu ở đây)
        $data['revenue'] = '15.000.000đ'; // Tạm thời giữ nguyên

        // Tải các view
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar'); // <-- THÊM DÒNG NÀY ĐỂ SỬA LỖI
        $this->load->view('admin/dashboard', $data); // <-- Truyền $data ra view
        $this->load->view('admin/footer');
    }
}
?>