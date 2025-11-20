<?php
class category extends DController{
    
    private $categorymodel;
    private $table_category_product = 'tbl_category_product';

    public function __construct()
    {
        parent::__construct();
        $this->categorymodel = $this->load->model('categorymodel');
    }

    /**
     * 1. HIỂN THỊ DANH SÁCH (READ)
     */
    public function list_category()
    {
        $data['category'] = $this->categorymodel->category($this->table_category_product);
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar'); 
        $this->load->view('admin/category_list', $data); 
        $this->load->view('admin/footer');
    }

    /**
     * 2. HIỂN THỊ FORM THÊM MỚI (ADD)
     */
    public function addcategory()
    {
        // Chỉ cần tải form, không cần data
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar'); 
        $this->load->view('admin/category_form'); // Tải form mới
        $this->load->view('admin/footer');
    }

    /**
     * 3. HIỂN THỊ FORM SỬA (EDIT)
     */
    public function editcategory($id)
    {
        $id = intval($id);
        $data['category_data'] = $this->categorymodel->categorybyid($this->table_category_product, $id)[0];
        
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar'); 
        $this->load->view('admin/category_form', $data); // Tải form mới, truyền data
        $this->load->view('admin/footer');
    }
        
    /**
     * 4. XỬ LÝ THÊM MỚI (INSERT)
     */
    public function process_insert()
    {
        $title = $_POST['title'];
        $desc = $_POST['desc'];

        $data = array(
            'title_category' => $title,
            'desc_category_product' => $desc
        );

        $result = $this->categorymodel->insertcategory($this->table_category_product, $data);
        
        // Chuyển hướng về trang danh sách
        header("Location: /web_perfume/category/list_category");
        exit();
    }
    
    /**
     * 5. XỬ LÝ CẬP NHẬT (UPDATE)
     */
    public function process_update($id)
    {
        $id = intval($id);
        $cond = "id_category_product = $id";
        
        $title = $_POST['title'];
        $desc = $_POST['desc'];

        $data = array(
            'title_category' => $title,
            'desc_category_product' => $desc
        );

        $result = $this->categorymodel->updatecategory($this->table_category_product, $data, $cond);
        
        // Chuyển hướng về trang danh sách
        header("Location: /web_perfume/category/list_category");
        exit();
    }

    /**
     * 6. XỬ LÝ XÓA (DELETE)
     */
    public function deletecategory($id) 
    {
        $id = intval($id);
        if ($id <= 0) {
            header("Location: /web_perfume/category/list_category?error=invalid_id");
            exit();
        }

        $cond = "id_category_product = $id";
        
        // Hàm này giờ đã hoạt động (vì đã sửa ở Bước 1)
        $result = $this->categorymodel->deletecategory($this->table_category_product, $cond);
        
        if ($result) {
            header("Location: /web_perfume/category/list_category?success=deleted");
        } else {
            header("Location: /web_perfume/category/list_category?error=delete_failed");
        }
        exit();
    }
}
?>