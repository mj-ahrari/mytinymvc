<?php
namespace system\router;
use ReflectionMethod;
class Routing{
    public function routeMe($url)
    {
        $url = explode("/",$url);
        if(file_exists(ROOT."application/controllers/".$url[0].".php")){
            $controller = $url[0];
            if(isset($url[1])){
                $class = "application\\controllers\\".$controller;
                $ctrlObj = new $class();
                if(method_exists($ctrlObj,$url[1])){
                    $method = $url[1];
                    $reflection = new ReflectionMethod($class,$method);
                    $methodParameterCount = $reflection->getNumberOfParameters();
                    if($methodParameterCount === 0){
                        $ctrlObj->$method();
                    }else{ 
                        if(isset($url[2])){
                            $requestParameterCount = sizeof(array_slice($url,2));
                        }else{
                            $requestParameterCount = 0;
                        }
                        if($requestParameterCount >= $methodParameterCount){
                            call_user_func_array(array($ctrlObj,$method),array_slice($url,2));
                        }else{
                            echo "Parameter Error";
                        }
                    }
                }else{
                    echo "404 - Not Found method not found";
                }
            }else{
                echo "404 - Not Found MEthod not set";    
            }
        }else{
            echo "404 - Not Found Controller";
        }
    }
}
?>