<?php
include_once('header.php');
?>

<div class="container">
    <div class="row">
        <?php var_dump($lesson) ?>
        <h2><?php echo $lesson['title']; ?></h2>
        <div>
            <?php echo $lesson['content']; ?>
        </div>

    </div>
</div>
</div>


</body>
<?php
include_once('footer.php');
?>