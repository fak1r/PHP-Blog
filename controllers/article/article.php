<?php

$id_article = (int)(URL_PARAMS['id']);  // создаётся на index.php
$normID = checkIDarticle($id_article);

if ($normID != false){
    $article = getArticle($normID);
    if ($article != false) {
        $pageTitle = $article['title'];

        $cats = getCat($article['id_cat']);
        $cat_title = $cats['title'];

        $content = template('articles/v_main', [
            'article' => $article,
            'cat_title' => $cat_title
        ]);

        $left = template('articles/v_menu',[
            'id_article' => $id_article,
            'userid' => $user['id_user'] ?? 0,
            'articleAuthor' => $article['id_user']
        ]);
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
}

else {
    header('HTTP/1.1 404 Not Found');
    $pageContent = template('errors/v_404');
}