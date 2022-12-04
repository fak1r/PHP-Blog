<?php

$left = template('contacts/v_menu');
$pageTitle = 'Contacts';
$content = template('contacts/v_main');

$pageContent = template('base/v_con2col', [
    'title' => $pageTitle,
    'content' => $content,
    'left' => $left
]);



