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
    protected function asset($dir)
    {
        $path = BASE_URL."public/".$dir;
        return $path;
    }
    protected function include($directory,$vars = null){
        $directory = str_replace(".","/",$directory);
        if($vars){
            extract($vars);
        }
        $path = ROOT."application/views/".$directory.".php";
        return require_once($path);
    }
}
?>