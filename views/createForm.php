<?php
include_once('header.php');
?>
<div class="container mg-top">
    <div class="page-heading text-center">
        <h1>Ajouter un cours</h1>
    </div>
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
            <div class="button-submit-div d-flex justify-center">
                <button type="submit" class=" btn btn-outline-success ">Créer</button>
            </div>

        </form>
    </section>
</div>

<?php
include_once('footer.php');
?>