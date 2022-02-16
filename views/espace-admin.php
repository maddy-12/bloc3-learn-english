<?php
include('header.php');
?>
<div class="container mg-top">
    <!-- Formulaire de création de recette -->
    <section>
        <form method="POST" action="?action=create">
            <div class="form-group row py-2">
                <label for="name" class="col-sm-2 col-form-label">Titre du cours</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Titre du cours">
                </div>
            </div>

            <div class="form-group row py-2">
                <label for="lesson" class="col-sm-2 col-form-label">lesson</label>
                <div class="col-sm-10">
                    <textarea name="lesson" class="form-control" id="lesson" placeholder="écrivez votre cours"></textarea>
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
                while ($lesson = $lessons->fetch()) {
            ?>

                    <div class="col-3 mx-4">
                        <!-- Cartes de recettes -->
                        <div class="card" style="width: 18rem;">
                            <div class="text-center">
                                <h5 class="card-title"> <?= $lesson['name']; ?></h5>
                                <a href="index.php?action=lessonDetail&amp;id=<?= $lesson['id'] ?>" class="btn btn-primary btn-card ">Voir</a>
                                <a href="index.php?action=adminUpdatelesson&amp;id=<?= $lesson['id'] ?>" class="btn btn-primary btn-card ">Modifier</a>
                                <a href="index.php?action=deletelesson&amp;id=<?= $lesson['id'] ?>" class="btn btn-primary btn-card ">Supprimer</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                $lessons->closeCursor();
            } else {
                ?>
                <p>Vous n'avez pas encore créer des cours </p>
            <?php
            }

            ?>
        </div>
    </section>
</div>

<?php
include('footer.php');
?>