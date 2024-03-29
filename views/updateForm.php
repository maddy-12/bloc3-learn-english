<?php
include_once('header.php');
?>
<div class="container mg-top">
    <div class="page-heading text-center">
        <h1>Modifier le cours</h1>
    </div>
    <!-- Formulaire de création de recette -->
    <section>
        <form method="POST" action="?action=updateLesson&amp;id=<?= $lesson['cours_id']; ?>">
            <div class="form-group row py-2">
                <label for="title" class="col-sm-2 col-form-label">Titre du cours</label>
                <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" id="title" placeholder="Titre du cours" value="<?= $lesson['title']; ?>">
                </div>
            </div>
            <div class=" form-group row py-2">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" placeholder="écrivez le description" value=""><?= $lesson['description']; ?></textarea>
                </div>
            </div>
            <div class="form-group row py-2">
                <label for="content" class="col-sm-2 col-form-label">Contenu</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control summernote" id="content" placeholder="écrivez votre cours"><?= $lesson['content']; ?></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="button-submit-div d-flex ">
                    <button type="submit" class=" btn  btn-gold btn-hover width-btn mx-2 ">Modifier</button>
                </div>
                <div class="back-btn">
                    <a class="btn btn-dark width-btn mx-2" href="?action=adminPage">Retour</a>
                </div>
            </div>
        </form>
    </section>

</div>

<?php
include_once('footer.php');
?>