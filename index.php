<?php

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(

    'apiShowDogs' => "/api/showUsers",

);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

// nothing is found so handle the 404 error
include(INCLUDE_DIR . '404.php');

?>

<html>

<h1> Deep Freeze Co, only the best </h1>

<p> Zhong Xina </p>

</html>