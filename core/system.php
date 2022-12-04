<?php

    function checkControllerName(string $name) : bool{
        return !!preg_match('/^[a-z0-9-]+$/', $name); // + в конце означает, что должен быть хоть 1 символ
    }

    function template(string $path, array $vars = []) : string {
        $systemTamplateRenererIntofullPath = "views/$path.php";
        extract($vars);
        ob_start();
        include ($systemTamplateRenererIntofullPath);
        return ob_get_clean();
    }