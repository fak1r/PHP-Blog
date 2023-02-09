<?php

if ($user === null){
    header('Location:' . BASE_URL . 'auth/login');
    exit();
}


$id_article = (int)(URL_PARAMS['id']);
$fields = getArticle($id_article);
$err = '';

if (($fields != false) && (($fields['id_user'] == $user['id_user']) || ($user['id_user'] == 1))) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $fields = extractFields($_POST, ['title', 'content', 'id_cat']);
        $validateErrors = messagesValidate($fields);
        $fields['id_article'] = $id_article;

        if (empty($validateErrors)) {
            articleEdit($fields);
            header("Location: " . BASE_URL . "article/$id_article");
            exit();
        }
    } else {
        $validateErrors = [];
    }
    $cats = getCats();
    $pageTitle = 'Edit Article';
    $pageContent = template('articles/v_add', [
        'fields' => $fields,
        'validateErrors' => $validateErrors,
        'cats' => $cats
    ]);
}
else {
        header('HTTP/1.1 404 Not Found');
        $pageContent = template('errors/v_404');
}


