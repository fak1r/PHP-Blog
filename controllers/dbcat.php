<?php

$id_article = (int)($_GET['id'] ?? '');

$dbarticles = getArticlesByCat($id_article);

$pageTitle = 'All Categories';
$pageContent = template('articles/v_index', [
    'dbarticles' => $dbarticles
]);
