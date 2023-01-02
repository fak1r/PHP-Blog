<?php

$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = extractFields($_POST, ['login', 'password', 'email', 'name']);
    $validateErrors = regValidate($fields);
    $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT );

    if(empty($validateErrors)){
        $addUser = usersAdd($fields);
    }

}
else{
    $fields = ['login' => '', 'password' => '', 'email' => '', 'name' => ''];
    $validateErrors = [];
}

$pageTitle = 'Registration';
$pageContent = template('auth/v_registration', [
    'fields' => $fields,
    'validateErrors' => $validateErrors
]);

if ($addUser == true){
    $pageTitle = 'Успешно!';
    $pageContent = "<h1>Регистрация успешно завершена! <br>Добро пожаловать!</h1>";
}