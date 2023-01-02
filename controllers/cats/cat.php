<?php

$id_cat = (int)(URL_PARAMS['id']);  // создаётся на index.php
$cats = catsAll();
$cat = getCat($id_cat);

if ($cat != false){
    $articles = getArticlesByCat($id_cat);



    $left = template('cats/v_menu',[
        'cats' => $cats
    ]);

    $pageTitle = 'Category: ' . $cat['title'];
    $content = 'В данной категории нет статей';

    if (!empty($articles)) {
        $content = template('articles/v_index', [
            'articles' => $articles,
            'userid' => $user['id_user'] ?? 0
        ]);
    }

    $pageContent = template('base/v_con2col', [
        'title' => $pageTitle,
        'content' => $content,
        'left' => $left,
    ]);
}
else {
    header('HTTP/1.1 404 Not Found');
    $pageContent = template('errors/v_404');
}








