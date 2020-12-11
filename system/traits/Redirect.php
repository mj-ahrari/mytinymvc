<?php
namespace system\traits;

trait Redirect{
    protected function redirect($url)
    {
        header("Location: ".BASE_URL.$url);
        die;
    }
    protected function redirectBack(){
        if(isset($_SERVER["HTTP_REFERER"])){
            header("Location: ".$_SERVER["HTTP_REFERER"]);
            die;
        }else{
            echo "Error in HTTP_REFERER";
            die;
        }
    }
}
?>