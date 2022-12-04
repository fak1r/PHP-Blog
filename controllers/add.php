<?php

$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields = extractFields($_POST, ['title', 'content', 'id_cat']);
    $validateErrors = messagesValidate($fields);

        if(empty($validateErrors)){
            articleAdd($fields);
            $db = dbInstance();
            $id_article = dblastID();
            echo $id_article;
            header("Location: index.php?c=dbarticle&id=$id_article");
            exit();
        }



    }
    else{
    $fields = ['title' => '', 'content' => '', 'id_cat' => ''];
    $validateErrors = [];
}

$pageTitle = 'Add Article';
$pageContent = template('articles/v_add', [
    'fields' => $fields,
    'validateErrors' => $validateErrors
]);




