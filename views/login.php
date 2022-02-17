<?php
//include_once('header.php');
?>

<div class="container container-form mg-top">
    <div class="page-heading text-center">
        <h1>SE CONNECTER</h1>
        <span>Bienvenue!</span>
    </div>
    <form class="login-form" method="POST" action="?action=login">

        <!-- firstname -->
        <div class="mb-3">
            <label for="username" class="form-label">Pseudonyme</label>
            <input name="username" type="text" class="form-control input-form" required="">
        </div>

        <!-- mot de passe -->
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input name="password" type="password" class="form-control  input-form" required="">
        </div>

        <!-- Confirmation de mot de passe -->
        <div class="btn-container d-flex justify-content-center">
            <!-- Bouton -->
            <button type="submit" class="btn btn-form btn-form btn-primary">Se connecter</button>
        </div>

    </form>

</div>

<?php
include_once('footer.php');
?>