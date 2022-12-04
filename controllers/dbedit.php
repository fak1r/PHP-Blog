<?php

$id_article = (int)($_GET['id'] ?? '');
checkIDarticle($id_article);

$fields = getArticle($id_article);
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $fields = extractFields($_POST, ['title', 'content', 'id_cat']);
    $validateErrors = messagesValidate($fields);
    $fields['id_article'] = $id_article;

    if(empty($validateErrors)){
        DBarticleEdit($fields);
        header("Location: index.php?c=dbarticle&id=$id_article");
        exit();
    }
    }
    else {
        $validateErrors = [];
    }

$pageTitle = 'Edit Article';
$pageContent = template('articles/v_add', [
    'fields' => $fields,
    'validateErrors' => $validateErrors
]);


