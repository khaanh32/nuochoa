<?php
class Admin extends DController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
}
?>