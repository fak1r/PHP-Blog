<?php

$articles = articlesAll();

$pageTitle = 'All Articles';
$pageContent = template('articles/v_index', [
    'articles' => $articles,
    'userid' => $user['id_user'] ?? 0
]);


