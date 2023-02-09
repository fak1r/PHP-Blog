<?php

const HOST = 'http://localhost';
const BASE_URL = '/PHP/PHP-Blog/';
const DB_HOST = 'localhost';
const DB_NAME = 'cryptoBlog';
const DB_USER = 'root';
const DB_PASS = '';

include_once('core/arr.php');
include_once('core/db.php');
include_once('core/system.php');
include_once('core/auth.php');

include_once('model/articles.php');
include_once('model/cats.php');
include_once('model/users.php');
include_once('model/sessions.php');
include_once('model/visits.php');