<?php

    $cats = catsAll();
    $pageTitle = 'All Categories';
    $pageContent = template('cats/v_mainall', [
        'cats' => $cats,
        'userid' => $user['id_user'] ?? 0
    ]);
