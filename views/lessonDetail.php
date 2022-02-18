<?php
include_once('header.php');
?>

<div class="container">
    <div class="row my-5">
        <h2 class="margin-top text-center"><?php echo $lesson['title']; ?></h2>
        <div class="my-5">
            <?php echo $lesson['content']; ?>
        </div>
        <div class="back-btn">
            <a class="btn btn-gold width-btn" href="?action=adminPage">Retour</a>
        </div>
    </div>

</div>
</div>


</body>
<?php
include_once('footer.php');
?>