<?php
namespace system\traits;

trait View{
    protected function view($directory, $vars = null)
    {
        $directory = str_replace(".","/",$directory);
        if($vars){
            extract($vars);
        }
        $path = ROOT."application/views/".$directory.".php";
        if($path){
            return require_once($path);
        }
        else{
            echo "View [".$directory."] does not exists.";
        }
    }
}
?>