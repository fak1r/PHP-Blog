<?php

if ($user === null){
    header('Location:' . BASE_URL . 'auth/login');
    exit();
}

$id_cat = (int)(URL_PARAMS['id']);

$fields = getCat($id_cat);

$err = '';

if (($fields != false) && ($fields['id_user'] == $user['id_user'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $fields = extractFields($_POST, ['title']);
        $validateErrors = titleValidate($fields);
        $fields['id_cat'] = $id_cat;

        if (empty($validateErrors)) {
            catEdit($fields);
            header("Location: " . BASE_URL . "cat/$id_cat");
            exit();
        }
    } else {
        $validateErrors = [];
    }

    $pageTitle = 'Edit Category';
    $pageContent = template('cats/v_add', [
        'fields' => $fields,
        'validateErrors' => $validateErrors
    ]);
}
else {
    header('HTTP/1.1 404 Not Found');
    $pageContent = template('errors/v_404');
}


