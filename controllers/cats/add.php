<?php

if ($user === null){
    header('Location:' . BASE_URL . 'auth/login');
    exit();
}

$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = extractFields($_POST, ['title']);
    $fields['id_user'] = $user['id_user'];
    $validateErrors = titleValidate($fields);

        if(empty($validateErrors)){
            catAdd($fields);
            $db = dbInstance();
            $id_cat = dblastID();
            header("Location: " . BASE_URL . "cat/$id_cat");
            exit();
        }

    }
else{
    $fields = ['title' => ''];
    $validateErrors = [];
}

$pageTitle = 'Add Category';


$pageContent = template('cats/v_add', [
    'fields' => $fields,
    'validateErrors' => $validateErrors
]);