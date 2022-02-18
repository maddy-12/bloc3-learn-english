<?php require('header.php'); ?>

<div class="container mt-5 pt-5">
    <div class="name-slogan">
        <div class="page-heading text-center">
            <h1>LEARN ENGLISH</h1>
            <span>Learn from the best !</span>
        </div>
    </div>
    <div class="d-flex justify-content-end my-5">
        <a href="index.php?action=displayCreateForm" class="btn btn-gold">Créer un cours</a>
    </div>
    <div class="row my-5">
        <?php
        if (isset($lessons)) {
            foreach ($lessons as $lesson) { ?>
                <div class="col-md-4 col-12 text-center">
                    <div class="card  my-2 shadow-sm card-height pt-3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold"><?= htmlspecialchars($lesson['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($lesson['description']); ?></p>
                            <div class="bottom">
                                <a href="index.php?action=lessonDetail&amp;id=<?= htmlspecialchars($lesson['cours_id']); ?> " class="btn btn-dark btn-hover">Lire</a>
                                <a href="index.php?action=getLessonById&amp;id=<?= ($lesson['cours_id']); ?>" class="btn btn-dark btn-hover">Modifier</a>
                                <a href="index.php?action=delete&amp;id=<?= ($lesson['cours_id']); ?>" class="btn btn-danger">Supprimer</a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php }
        } else {
            ?>
    </div>
    <div class="text-center">
        <p class="alert alert-warning"> Il n'ya pas encore de cours </p>
    </div>
<?php
        }
?>

</div>
</div>
<?php require('footer.php'); ?>