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

    <!-- script -->
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>LEARN ENGLISH</title>
</head>

<body>
    <nav id="navbar-white" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <img src="../assets/images/Learn_English.png" alt="logo">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.php">Acceuil</a>
                    </li>
                    <!-- Si connecté on affiche -->
                    <?php

                    if (isset($_SESSION['userId'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?action=adminPage">Mon espace</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?action=logout" role="button">Logout</a>
                        </li>
                    <?php
                        //Si non connecté 
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=displayLogin">Se connecter</a>
                        </li>

                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>