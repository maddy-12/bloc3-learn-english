<?php require('header.php'); ?>

<div class="container mt-5 pt-5">
    <div class="name-slogan">
        <h1>LEARN ENGLISH</h1>

        <span>Learn from the best !</span>

        <?php foreach ($lessons as $lesson) { ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $lesson['title'] ?></h5>
                            <p class="card-text"><?= $lesson['content'] ?></p>
                            <a href="index.php?action=lessonDetail&amp;id=<?= $lesson['id'] ?>" class="btn btn-primary">Voir la leçon</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require('footer.php'); ?>