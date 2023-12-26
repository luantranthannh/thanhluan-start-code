<?php
require_once dirname(dirname(__DIR__)) . '/models/post.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST['title']) and !empty($_POST['description'])){
        post_update($id, $_POST['title'], $_POST['description']);
        header('location: /start-code/post');
    }
}
else{
    require dirname(dirname(__DIR__)) . '/views/post/form.edit.view.php';
}

?>