<?php

if ($user === null){
    header('Location:' . BASE_URL . 'auth/login');
    exit();
}
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = extractFields($_POST, ['title', 'content', 'id_cat']);
    $validateErrors = messagesValidate($fields);
    $fields['id_user'] = $user['id_user'];
        if(empty($validateErrors)){
            articleAdd($fields);
            $db = dbInstance();
            $id_article = dblastID();
            header("Location: " . BASE_URL . "article/$id_article");
            exit();
        }



    }
    else{
    $fields = ['title' => '', 'content' => '', 'id_cat' => ''];
    $validateErrors = [];
}

$cats = getCats();
$pageTitle = 'Add Article';
$pageContent = template('articles/v_add', [
    'fields' => $fields,
    'validateErrors' => $validateErrors,
    'cats' => $cats
]);




