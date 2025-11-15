<?php

 class DController{
    protected $load=array();

     public function __construct()
     {
        session_start();
        $this->load=new Load();
         
     }

     public function view($viewName, $data = [], $layout = "main") {
        extract($data);
        ob_start();
        include "app/views/$viewName.php";
        $content = ob_get_clean();
        include "app/views/layouts/$layout.php";
    }
 }
?>
