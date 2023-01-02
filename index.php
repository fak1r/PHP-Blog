<?php

session_start();
include_once ('init.php');

$pageCanonical = HOST . BASE_URL;
$uriParts = getUriParts($_SERVER['REQUEST_URI']);
$uri = $uriParts['url'];
$badUrl = BASE_URL . 'index.php';

$user = authGetUser();
addVisitLog();

    if (hasDoubleSlashes($uri)){
        $redirectUrl = preg_replace('/\/{2,}/', '/', $uri);

        if ($uriParts['get'] !== ''){
            $redirectUrl .= '?' . $uriParts['get'];
        }
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: $redirectUrl");
    }

    if (strpos($uri, $badUrl) === 0) {
        $cname = 'errors/e404';
    }
    else {
        $routes = include('routes.php');
        $url = $_GET['querysystemurl'] ?? '';
        $routerRes = parseUrl($url, $routes);
        $cname = $routerRes['controller'];
        define('URL_PARAMS', $routerRes['params']);

        $urlLen = strlen($url);
        if ($urlLen > 0 && $url[$urlLen -1] == '/'){
            $url = substr($url, 0, $urlLen - 1);
        }
        $pageCanonical .= $url;
    }



$path = "controllers/$cname.php";
$pageTitle = 'Ошибка 404';
$pageContent = '';

    if(!file_exists($path)){
        $cname = 'errors/e404';
        $path = "controllers/$cname.php";
    }

include_once ($path);

$htlm = template('base/v_main',[
    'title' => $pageTitle,
    'content' => $pageContent,
    'canonical' => $pageCanonical,
    'user' => $user
]);
echo $htlm;