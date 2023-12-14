<?php include APP_ROOT . '/public/common/header.php' ?>
<?php include APP_ROOT . '/public/common/container.php' ?>
<div id="blog" class="row">
    <?php


    foreach ($posts as $post) {
        $date = date_create($post->getCreated());
//        $message = str_replace("\n\r", "<br><br>", $post->message);
        $message = $post->limitMessage($post->getMessage())
        ?>
        <div class="col-md-10 blogShort">
            <h3><a href="?c=post&a=get&id=<?php echo $post->getId(); ?>"><?php echo $post->getTitle(); ?></a></h3>
            <em><strong>Published on</strong>: <?php echo date_format($date, "d F Y"); ?></em>
            <em><strong>Category:</strong> <a href="#" target="_blank"><?php echo $post->getCategory(); ?></a></em>
            <br><br>
            <article>
                <p><?php echo $message ?> </p>
            </article>
            <a class="btn btn-blog pull-right" href="?c=post&a=get&id=<?php echo $post->getId(); ?>">READ MORE</a>
        </div>
    <?php } ?>
</div>
<?php include APP_ROOT . '/public/common/footer.php' ?>
