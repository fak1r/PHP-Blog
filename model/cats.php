<?php

    function catsAll() : array{
        $sql = "SELECT * FROM cats ORDER BY id_cat";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }

    function getCat(int $id_cat){
        $sql = "SELECT * FROM cats WHERE id_cat=:id";
        $query = dbQuery($sql, ['id' => $id_cat]);
        return $query->fetch();
    }

    function catAdd(array $fields) : bool{
        $sql = "INSERT INTO cats (title, id_user) VALUES (:title, :id_user)";
        dbQuery($sql, $fields);
        return true;
    }

    function catDelete(int $id) : bool{
        $sql = "DELETE FROM cats WHERE id_cat = $id";
        dbQuery($sql);
        return true;
    }

    function catEdit(array $fields) : bool{
        $sql = "UPDATE cats SET title = :title, id_cat = :id_cat WHERE id_cat = :id_cat";
        dbQuery($sql, $fields);
        return true;
    }

    function getCats() : array {
        $sql = "SELECT * FROM `cats` ORDER BY id_cat ASC";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }
