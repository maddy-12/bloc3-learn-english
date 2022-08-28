<?php require('header.php'); ?>

<div class="container mt-5 pt-5">
    <div class="name-slogan">
        <div class="page-heading text-center">
            <h1>LEARN ENGLISH</h1>
            <span>Learn from the best !</span>
        </div>
    </div>
    <div class="row my-5">
        <?php
        if (!empty($lessons)) {
            foreach ($lessons as $lesson) { ?>
                <div class="col-md-4 text-center col-12">
                    <div class="card shadow-sm card-height">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?= htmlspecialchars($lesson['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($lesson['description']) ?></p>
                            <a href="index.php?action=lessonDetail&amp;id=<?= $lesson['cours_id'] ?>" class="btn btn-dark btn-hover width-btn">Voir la leçon</a>
                        </div>
                    </div>
                </div>
            <?php }
        } else {
            ?>
    </div>
    <div class="text-center">
        <p class="alert alert-warning"> Nous n'avons pas réussi à trouver ce que vous recherchez </p>
    </div>
<?php
        }
?>

</div>
</div>
<?php require('footer.php'); ?>