<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$article = Article::getByID($conn, $_POST['id']);

$published_at = $article->publish($conn);

?><time><?= $published_at ?></time>
