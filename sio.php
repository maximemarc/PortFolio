<?php
session_start();
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>BTS SIO</title>
    <link rel="icon" type="img/png" href="resources/img/logo.png" />
    <link href="resources/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
</head>

<body>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link">Acceuil</a></li>
            <li class="nav-item"><a href="index.php#projet" class="nav-link">Projets</a></li>
            <li class="nav-item"><a href="index.php#competence" class="nav-link">Compétences</a></li>
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">BTS SIO</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link ">Contact</a></li>
            <?php
            if (isset($_SESSION["admin"])) {
                echo '<li class="nav-item"><a href="admin/dashboard.php" class="nav-link">DashBoard</a></li>';
            }
            ?>
        </ul>
    </header>
    <main>
        <section class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Présentation du BTS SIO</h1>
            <a class="btn btn-primary" type="button" href="resources/docs/presentation_bts_sio_reims.pdf" target="_blank">Voir la Présentation</a>
        </section>
        <br>
        <section class="container">

            <h1>Le BTS SIO débouche sur deux domaines</h1>
            <p>relativement distincts, auxquels correspondent les deux options du diplôme</p>
            <p> ✨ SLAM : Solutions logicielles et applications métiers </p>
            <p>✨ SISR : Solutions d’infrastructure, systèmes et réseaux</p>
            <p>L'objectif est de former et d'accompagner les étudiants dans la production de services</p>
        </section>
        <br>
        <section class="container">

            <h1>Les Options du BTS SIO</h1>
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-primary bg-gradient rounded-3">
                        <h2>OPTION A : SISR
                            Solutions d'Infrastructures Systèmes et Réseaux</h2>
                        <p>
                            La spécialisation SISR du BTS SIO permet d’apprendre un métier qui consiste à installer, configurer et gérer les équipements et les réseaux informatiques.
                            Cela signifie intervenir sur la conception, la mise en place, le déploiement et la maintenance de programmes destinés à la gestion au sein d’une organisation.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="h-100 p-5 text-white bg-primary bg-gradient border rounded-3">
                        <h2>OPTION B : SLAM
                            Solutions Logicielles et Applications Métiers</h2>
                        <p>
                            La spécialisation SLAM du BTS SIO est elle plus orientée Développement. Elle permet d'apprendre à réaliser des logiciels, sites webs, applications mobiles,
                            mais aussi de rédiger des documentations techniques liées à celles-ci. De plus, elle permet d'apprendre à former des utilisateurs
                            pour gérer la maintenance des applications.
                        </p>
                    </div>
                </div>
        </section>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center"><span class="text-muted">&copy; 2022 MARC Maxime</span> </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a href="https://www.linkedin.com/in/maximemarc51" target="_blank"><i class="icon fab fa-linkedin text-darkblue"></i></a></li>
            <li class="ms-3"><a href="https://github.com/maximemarc/" target="_blank"><i class="icon fab fa-github text-darkblue"></i></a></li>

            <li class="ms-3"><a href="https://twitter.com/maximemarc51" target="_blank"><i class="icon fab fa-twitter text-darkblue"></i></a></li>

            <li class="ms-3"><a href="https://maximemarc.online" target="_blank"><i class="icon fab fa-chrome text-darkblue"></i></a></li>
        </ul>
    </footer>
</body>

</html>