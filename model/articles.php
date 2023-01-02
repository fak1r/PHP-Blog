<?php

	include_once('core/db.php');

	function articlesAll() : array{
		$sql = "SELECT * FROM articles ORDER BY dt_add DESC";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}

	function articleAdd(array $fields) : bool{
		$sql = "INSERT INTO articles (title, content, id_cat, id_user) VALUES (:title, :content, :id_cat, :id_user)";
		dbQuery($sql, $fields);
		return true;
	}

	function getArticle(int $id_article){
	    $sql = "SELECT * FROM `articles` WHERE id_article=:id";
	    $query = dbQuery($sql, ['id' => $id_article]);
	    return $query->fetch();

    }

    function articleDelete(int $id) : bool{
        $sql = "DELETE FROM articles WHERE id_article = $id";
        dbQuery($sql);
        return true;
    }

    function articleEdit(array $fields) : bool{
	    $sql = "UPDATE articles SET title = :title, content = :content, id_cat = :id_cat WHERE id_article = :id_article";
	    dbQuery($sql, $fields);
	    return true;
    }

    function checkIDarticle($id_article){
	    $regexp = '/^[0-9]{1,3}$/';
        if (preg_match($regexp, $id_article)) {
            return $id_article;
        }
        else {
            return false;
        }
    }

    function getArticlesByCat(int $id_cat) : array{
	    $sql = "SELECT * FROM articles WHERE id_cat = $id_cat";
	    $query = dbQuery($sql);
	    return $query->fetchAll();
    }