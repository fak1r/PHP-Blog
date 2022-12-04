<?php

$id = (int)($_GET['id'] ?? '');
DBarticleDel($id);
$pageTitle = 'Успешно удалено!';
$pageContent = "<h1>Delete complete!</h1>";



