<?php

if ($user === null){
    header('Location:' . BASE_URL . 'auth/login');
    exit();
}

$id_cat = (int)(URL_PARAMS['id']);  // создаётся на index.php
$cat = getCat($id_cat);

if (($cat != false) && (($cat['id_user'] == $user['id_user'])) || ($user['id_user']=1)) {
    catDelete($id_cat);
    $pageTitle = 'Успешно удалено!';
    $pageContent = "<h1>Delete complete!</h1>";
}
else {
    header('HTTP/1.1 404 Not Found');
    $pageContent = template('errors/v_404');
}