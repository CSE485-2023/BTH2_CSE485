<?php include APP_ROOT . '/public/common/header.php' ?>
<?php include APP_ROOT . '/public/common/container.php' ?>
<div id="blog" class="row">
    <?php

        $date = date_create($post->getCreated());
        ?>
        <div class="col-md-10 blogShort">
            <a class="btn btn-warning" href="./">Quay lại</a>
            <h3><a href="#"><?php echo $post->getTitle(); ?></a></h3>
            <em><strong>Published on</strong>: <?php echo date_format($date, "d F Y"); ?></em>
            <em><strong>Category:</strong> <a href="#" target="_blank"><?php echo $post->getCategory(); ?></a></em>
            <br><br>
            <article>
                <p><?php echo $post->getMessage() ?> </p>
            </article>
        </div>
</div>
<?php include APP_ROOT . '/public/common/footer.php' ?>
