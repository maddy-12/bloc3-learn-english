<?php
include('header.php');
?>
<div class="container mg-top">
    <!-- Formulaire de création de recette -->
    <section>
        <form method="POST" action="?action=create">
            <div class="form-group row py-2">
                <label for="title" class="col-sm-2 col-form-label">Titre du cours</label>
                <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" id="title" placeholder="Titre du cours">
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" placeholder="écrivez votre cours"></textarea>
                </div>
            </div>

            <div class="form-group row py-2">
                <label for="content" class="col-sm-2 col-form-label">Contenu</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control" id="content" placeholder="écrivez votre cours"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-outline-success ">Créer</button>
        </form>
    </section>


    <!-- Liste des recettes créées -->
    <section>
        <div class="row d-flex justify-content-center">
            <?php
            if (!empty($lessons)) {
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
            } else {
                ?>
                <div class="text-center">
                    <p class="alert alert-warning">Vous n'avez pas encore créer des cours </p>
                </div>
            <?php
            }

            ?>
        </div>
    </section>
</div>

<?php
include('footer.php');
?>