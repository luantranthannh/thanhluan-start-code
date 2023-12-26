<?php
require_once dirname(dirname(__DIR__)) . '/models/post.model.php';
require_once dirname(dirname(__DIR__)) . '/views/partials/head.php';
require_once dirname(dirname(__DIR__)) . '/functions.php';
require_once dirname(dirname(__DIR__)) . '/views/partials/nav.php';


    $id = $_GET["id"] ? $_GET["id"] : null;
    if (isset($id)):
       $post = post_get($id);
?>
<div class="card mt-5">
    <div class="card-body">
        <form action="/start-code/post/edit" method='post'>
            <input type="hidden" value="<?= $post['id'] ?>" name="id">
            <div class="form-group">
                <input type="text" placeholder="title" class="form-control" name="title" value="<?= $post['title'] ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" name="description"><?= $post['description'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Post</button>
            </div>
        </form>
    </div>
</div>

<?php 

    endif;
    require_once dirname(dirname(__DIR__)) . '/views/partials/footer.php';

?>