<?php

    function authGetUser() : ?array{
        $user = null;
        $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;

        if ($token !== null){
            $session = sessionsOne($token);

            if ($session !== null){
                $user = usersById($session['id_user']);
            }

            if ($user === null){
                unset($_SESSION['token']);
                setcookie('token', '', time() -1, BASE_URL);
            }
        }
        return $user;
    }