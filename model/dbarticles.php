<?php

	include_once('core/db.php');

	function articlesAll() : array{
		$sql = "SELECT * FROM articles ORDER BY dt_add DESC";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}

	function articleAdd(array $fields) : bool{
		$sql = "INSERT INTO articles (title, content, id_cat) VALUES (:title, :content, :id_cat)";
		dbQuery($sql, $fields);
		return true;
	}

	function getArticle(int $id_article){
	    $sql = "SELECT * FROM `articles` WHERE id_article=:id";
	    $query = dbQuery($sql, ['id' => $id_article]);
	    return $query->fetch();

    }

	function dblastID() : string{
        $db = dbInstance();
        return $db -> lastInsertId();
    }

    function getCats() : array {
	    $sql = "SELECT * FROM `cats` ORDER BY id_cat ASC";
	    $query = dbQuery($sql);
	    return $query->fetchAll();
    }

    function DBarticleDel(int $id) : bool{
        $sql = "DELETE FROM articles WHERE id_article = $id";
        dbQuery($sql);
        return true;
    }

    function DBarticleEdit(array $fields) : bool{
	    $sql = "UPDATE articles SET title = :title, content = :content, id_cat = :id_cat WHERE id_article = :id_article";
	    dbQuery($sql, $fields);
	    return true;
    }

    function checkIDarticle($id_article){
	    $article = getArticle($id_article);
        if ($article['id_article']<1) {     //&& preg_match("/^[1-9]\+d+$/")
            echo "Error 404, Invalid ID";
            exit();
        }
	    return $article;
    }

    function messagesValidate(array &$fields) : array{
	    $errors = [];
	    $textlen = mb_strlen($fields['content'], 'UTF-8');
        if (mb_strlen($fields['title'], 'UTF-8') < 2){
            $errors[] = 'Имя не короче 2 символа';
        }
        if($textlen <10 || $textlen > 140) {
            $errors[] = 'Текст от 10 до 140 символов';
        }
        $fields['title'] = htmlspecialchars($fields['title']);
        $fields['content'] = htmlspecialchars($fields['content']);
        return $errors;
    }

    function getArticlesByCat(int $id_cat) : array{
	    $sql = "SELECT * FROM articles WHERE id_cat = $id_cat";
	    $query = dbQuery($sql);
	    return $query->fetchAll();
    }