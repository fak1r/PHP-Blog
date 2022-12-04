<?php

$dbarticles = articlesAll();
$pageTitle = 'All Articles';
$pageContent = template('articles/v_index', [
    'dbarticles' => $dbarticles
]);



