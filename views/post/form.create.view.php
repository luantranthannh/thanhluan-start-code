<?php
require dirname(dirname(__DIR__)) . '/views/partials/head.php';
require_once dirname(dirname(__DIR__)) . '/functions.php';
require dirname(dirname(__DIR__)) . '/views/partials/nav.php'
?>
<div class="card mt-5">
    <div class="card-body"> 
        <form action="/start-code/post/create" method="post">
            <div class="form-group"> 
                <label for="title">Create Form </label>
                <input type="text" placeholder="title" class="form-control" name="title">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" name="description"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Post</button>
            </div>
        </form>
    </div>
</div>

<?php require dirname(dirname(__DIR__)) . "/views/partials/footer.php" ?>

