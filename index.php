<?php
session_start();
spl_autoload_register(function($class){
    include_once'system/libs/'.$class.'.php';
});

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'index';
$url = explode('/', filter_var($url, FILTER_SANITIZE_URL));

$controllerName = !empty($url[0]) ? $url[0] : 'index';
$methodName = !empty($url[1]) ? $url[1] : 'index';
$params = array_slice($url, 2);

$controllerFile = 'app/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
    include_once $controllerFile;
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $methodName)) {
            $controller->{$methodName}($params);
        } else {
            // Handle method not found
            echo "Method not found";
        }
    } else {
        // Handle class not found
        echo "Controller class not found";
    }
} else {
    // Handle controller file not found
    echo "Controller file not found";
}
?>