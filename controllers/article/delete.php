<?php

if ($user === null){
    header('Location:' . BASE_URL . 'auth/login');
    exit();
}

$id_article = (int)(URL_PARAMS['id']);  // создаётся на index.php
$article = getArticle($id_article);

if (($article != false) && (($article['id_user'] == $user['id_user']) || ($user['id_user'] == 1))) {
    articleDelete($id_article);
    $pageTitle = 'Успешно удалено!';
    $pageContent = "<h1>Delete complete!</h1>";
}
else {
    header('HTTP/1.1 404 Not Found');
    $pageContent = template('errors/v_404');
}



