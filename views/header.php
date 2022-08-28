<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/c8bdca93db.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">

    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


    <!-- script -->
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- alert when deleting -->
    <script language="JavaScript" type="text/javascript">
        function checkDelete() {
            return confirm('Etes vous sûre de vouloir supprimer ce cours ?');
        }
    </script>


    <title>LEARN ENGLISH</title>


</head>

<body>
    <nav id="navbar-white" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container d-flex justify-content-between">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <img src="../assets/images/Learn_English.png" style="height: 50px; margin-right: 50px;" alt="logo">
                    </li>
                    <li class="nav-item align-middle">
                        <a class="nav-link active " href="?action=display">Accueil</a>
                    </li>

                    <!-- Si connecté on affiche -->
                    <?php

                    if (isset($_SESSION['userId'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=adminPage">Mon espace</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?action=logout" role="button">Se déconnecter</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <form class="d-flex" role="search" method="get">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn  search-btn" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>