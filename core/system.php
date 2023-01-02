<?php

//    function checkControllerName(string $name) : bool{
//        return !!preg_match('/^[a-z0-9-]+$/', $name); // + в конце означает, что должен быть хоть 1 символ
//    }

    function template(string $path, array $vars = []) : string {
        $systemTemplateRenererIntoFullPath = "views/$path.php";
        extract($vars);
        ob_start();
        include ($systemTemplateRenererIntoFullPath);
        return ob_get_clean();
    }

    function parseUrl(string $url, array $routes) : array{
        $res = [
            'controller' => 'errors/e404',
            'params' => []
        ];
        foreach ($routes as $route){
            $matches = [];

            if (preg_match($route['test'], $url, $matches)){
                $res['controller'] = $route['controller'];
                if (isset($route['params'])) {
                    foreach ($route['params'] as $name => $num) {
                        $res['params'][$name] = $matches[$num];
                    }
                }
                break;
            }
        }
        return $res;
    }

    function messagesValidate(array &$fields) : array{
        $errors = [];
        $textlen = mb_strlen($fields['content'], 'UTF-8');
        if (mb_strlen($fields['title'], 'UTF-8') < 2){
            $errors[] = 'Имя не короче 2 символа';
        }
        if($textlen <10 || $textlen > 1000) {
            $errors[] = 'Текст от 10 до 1000 символов';
        }
        $fields['title'] = htmlspecialchars($fields['title']);
        $fields['content'] = htmlspecialchars($fields['content']);
        return $errors;
    }

    function titleValidate(array &$fields) : array{
        $errors = [];
        if (mb_strlen($fields['title'], 'UTF-8') <= 1){
            $errors[] = 'Имя не короче 1 символа';
        }
        elseif ((mb_strlen($fields['title'], 'UTF-8') > 10)){
            $errors[] = 'Имя не длиннее 10 символов';
        }
        $fields['title'] = htmlspecialchars($fields['title']);
        return $errors;
    }

    function getUriParts(string $uri) : array{
        $parts = explode('?', $uri);
        return [
            'url' => $parts[0] ?? '',
            'get' => $parts[1] ?? ''
        ];
    }

    function hasDoubleSlashes(string $uri) : bool{
        $pattern = '/\/{2,}/';
        return !!preg_match($pattern, $uri);
    }

//    function error404(){
//        header('HTTP/1.1 404 Not Found');
//        $pageContent = template('errors/v_404');
//        return header('HTTP/1.1 404 Not Found');
//    }

    function regValidate(array &$fields) : array{
        $errors = [];
        $correctMail = stristr($fields['email'], '@');
        if (mb_strlen($fields['login'], 'UTF-8') <= 3){
            $errors[] = 'Логин не короче 3 символов';
        }
        elseif ((mb_strlen($fields['login'], 'UTF-8') > 10)){
            $errors[] = 'Логин не длиннее 10 символов';
        }
        if (mb_strlen($fields['password'], 'UTF-8') <= 4){
            $errors[] = 'Пароль не короче 4 символов';
        }
        elseif (mb_strlen($fields['password'], 'UTF-8') > 20){
            $errors[] = 'Пароль не длиннее 20 символов';
        }
        if (mb_strlen($fields['email'], 'UTF-8') <= 3){
            $errors[] = 'Email не короче 3 символов';
        }
        elseif ((mb_strlen($fields['email'], 'UTF-8') > 20)){
            $errors[] = 'Email не длиннее 20 символов';
        }
        elseif ($correctMail == 0){
            $errors[] = 'Email должен содержать @';
        }
        if (mb_strlen($fields['name'], 'UTF-8') <= 3){
            $errors[] = 'Имя не короче 3 символов';
        }
        elseif ((mb_strlen($fields['name'], 'UTF-8') > 10)){
            $errors[] = 'Имя не длиннее 10 символов';
        }
        $fields['login'] = htmlspecialchars($fields['login']);
        return $errors;
    }
