<?php

$id_article = (int)($_GET['id'] ?? '');
$article = getArticle($id_article);
$hasArticle = $article !== false;

if ($hasArticle) {
    $pageTitle = $article['title'];

    $content = template('articles/v_main', [
        'article' => $article
    ]);

    $left = template('articles/v_menu',[
        'id_article' => $id_article
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



