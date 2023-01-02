<?php

    function usersOne(string $login) : ?array{
        $sql = "SELECT id_user, password FROM users WHERE login=:login";
        $query = dbQuery($sql, ['login' => $login]);
        $user = $query->fetch();
        return $user === false ? null : $user; // если user false, то возвращает null, иначе вернет user
    }

    function usersById(string $id) : ?array{
        $sql = "SELECT id_user, login, email, name FROM users WHERE id_user=:id";
        $query = dbQuery($sql, ['id' => $id]);
        $user = $query->fetch();
        return $user === false ? null : $user; // если user false, то возвращает null, иначе вернет user
    }

    function usersAdd(array $fields) : bool{
        $sql = "INSERT INTO users (login, password, email, name) VALUES (:login, :password, :email, :name)";
        dbQuery($sql, $fields);
        return true;
    }

//    function userNameById(int $id_user){
//        $sql = "SELECT name FROM users WHERE id_user=:id_user";
//        $query = dbQuery($sql, ['id_user' => $id_user]);
//        $userName = $query->fetch();
//        return $userName;
//    }

//    function allUsers(){
//        $sql = "SELECT id_user, name FROM users";
//        $query = dbQuery($sql);
//        return $query->fetchAll();
//    }