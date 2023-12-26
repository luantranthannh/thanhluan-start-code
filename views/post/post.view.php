<?php

$heading = "Post Page";

require_once dirname(dirname(__DIR__)) . '/models/post.model.php';
require_once dirname(dirname(__DIR__)) . '/views/partials/head.php';
require_once dirname(dirname(__DIR__)) . '/views/partials/footer.php';

$posts = post_get_all();
?>

  <a href="/start-code/post/create" class="btn btn-primary mt-2">Add Post</a>
  <main>
    <div class="p-3">
    <?php foreach($posts as $post): ?>
      <li>
        <?= $post['title'] ?> |  
        <span><?= $post['description'] ?></span> | 
        <a href="/start-code/post/delete?id=<?= $post['id'] ?>">Delete</a> 
        <a href="/start-code/post/edit?id=<?= $post['id'] ?>">Edit</a>
      </li>

    <?php endforeach; ?>
    </div>
  </main>

  <?php  require_once dirname(dirname(__DIR__)) . '/views/partials/footer.php' ?>
