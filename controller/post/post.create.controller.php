<?php
require_once dirname(dirname(__DIR__)) . '/models/post.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['title']) && !empty($_POST['description'])){
        Create_New_Post($_POST['title'], $_POST['description']);
        header('location: /start-code/post');
    }
}
else {
   require dirname(dirname(__DIR__)) . '/views/post/form.create.view.php';
}
?>