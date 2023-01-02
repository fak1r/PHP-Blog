<?php

    function sessionsAdd(int $idUser, string $token) : bool{
        $params = ['uid' => $idUser, 'token' => $token];
        $sql = "INSERT INTO sessions (id_user, token) VALUES (:uid, :token)";
        dbQuery($sql, $params);
        return true;
    }

    function sessionsOne(string $token) : ?array {
        $sql = "SELECT * FROM sessions WHERE token=:token";
        $query = dbQuery($sql, ['token' => $token]);
        $session = $query->fetch();
        return $session === false ? null : $session; // если session false, то возвращает null, иначе вернет session
    }

    function sessionsDelete(int $id_user) : bool{
        $params = ['id_user' => $id_user];
        $sql = "DELETE FROM sessions WHERE id_user=:id_user";
        dbQuery($sql, $params);
        return true;
    }