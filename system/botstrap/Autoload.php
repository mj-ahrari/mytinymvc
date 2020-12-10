<?php
namespace system\bootstrap;
class Autoload{
    public function load()
    {
        spl_autoload_register(function($class){
            $class = str_replace("\\","/",$class);
            if(file_exists(ROOT.$class.".php")){
                require_once(ROOT.$class.".php");
            }
        });
    }
}
?>