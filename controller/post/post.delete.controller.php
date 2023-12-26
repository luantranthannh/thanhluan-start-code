<?php
require_once dirname(dirname(__DIR__)) . '/database/database.php';
require_once dirname(dirname(__DIR__)) . '/models/post.model.php';
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id)) {
    post_delete($id);
    header('Location: /start-code/post');
}
