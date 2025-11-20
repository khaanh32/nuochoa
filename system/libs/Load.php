<?php

class Load{

    public function __construct()
       {
           
       }
    
    public function view($fileName, $data= false){
        if($data == true){
            extract($data);
        }
        // SỬA: Xóa khoảng trắng thừa trong đường dẫn
        include 'app/views/'.$fileName.'.php';
    }
    
    public function model($fileName){
        // SỬA: Xóa khoảng trắng thừa trong đường dẫn
        include 'app/models/'.$fileName.'.php';
        return new $fileName();
    }
}

?>