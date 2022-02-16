<?php require('header.php'); ?>

<div class="container mt-5 pt-5">
    <div class="name-slogan">
        <div class="page-heading text-center">
            <h1>LEARN ENGLISH</h1>
            <span>Learn from the best !</span>
        </div>
        <?php
        if (isset($lessons)) {
            foreach ($lessons as $lesson) { ?>
                <div class="row my-5">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= utf8_encode($lesson['title']) ?></h5>
                                <p class="card-text"><?= utf8_encode($lesson['description']) ?></p>
                                <a href="index.php?action=lessonDetail&amp;id=<?= $lesson['cours_id'] ?>" class="btn btn-primary">Voir la leçon</a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
            $lessons->closeCursor();
        }
        ?>

    </div>
</div>
<?php require('footer.php'); ?>