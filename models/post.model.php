<?php
require_once dirname(dirname(__FILe__)) . '/database/database.php';

function Create_New_Post ($title, $description){
    global $connection;
    $sttm = $connection->prepare("insert into posts (title, description) values(:title, :description)");
    $sttm->execute([
        ':title' => $_POST['title'],
        ':description' => $_POST['description']
    ]);
}

function Sellect_All_Post(){
    global $connection;
    $sttm = $connection->prepare("select * from posts");
    $sttm-> execute();
    $posts = $sttm->fetchAll();
    return $posts;
}

function Sellect_One_Post ($id){
    global $connection;
    $sttm = $connection->prepare('select * from posts where id =:id');
    $sttm->execute([
        ':id' => $id
    ]);
    $post = $sttm->fetch();
    return $post;
}

function Delete_Post($id){
    global $connection;
    $sttm = $connection->prepare('delete from posts where id = :id');
    $sttm->execute([
        ':id' => $id
    ]);
}

function Update_Post($id, $title, $description){
    global $connection;
    $sttm = $connection->prepare('update posts set title = :title, description = :description where id = :id');
    $sttm->execute([
        ':title' =>$_POST['title'],
        ':description' => $_POST['description'],
        ':id' => $_POST['id'] 
    ]);
}
?>


