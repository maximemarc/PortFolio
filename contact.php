<?php
session_start();
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="icon" type="img/png" href="resources/img/logo.png" />
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
            <li class="nav-item"><a href="sio.php" class="nav-link">BTS SIO</a></li>
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Contact</a></li>
            <?php
            if (isset($_SESSION["admin"])) {
                echo '<li class="nav-item"><a href="admin/dashboard.php" class="nav-link">DashBoard</a></li>';
            }
            ?>
        </ul>
    </header>
    <main>
        <br>
        <br>
        <br>
        <br>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"> </div>
                    <div class="col-lg-4"> <img src="resources/img/moi.jpg" alt="photo de moi " width="137" height="140" class="rounded-circle">
                        <h2>MARC Maxime</h2>
                        <p>Etudiant en deuxième année du BTS SIO </p>
                        <hr>
                        <h1>Me contacter :</h1>
                        <br>
                        <h4>Tel : 06 51 43 50 87</h4>
                        <h4>Mail :<br> 
                            <a HREF="mailto:maxime@development-for-future.tech">maxime@development-for-future.tech</a>
                            <br>
                            <em><strong>ou</strong></em>
                            <a HREF="mailto:contact@maximemarc.online">contact@maximemarc.online</a>
                        </h4>
                        <br>
                        <h4>
                            <i class="icon fab fa-linkedin text-black"></i><a href="https://www.linkedin.com/in/maximemarc51" target="_blank">MARC Maxime</a>
                        </h4>
                        <h4>
                            <i class="icon fab fa-github text-black"></i><a href="https://github.com/maximemarc/" target="_blank">@maximemarc</a>
                        </h4>
                        <h4>
                            <i class="icon fab fa-twitter text-black"></i><a href="https://twitter.com/maximemarc51" target="_blank">@maximemarc51</a>
                        </h4>
                        <br>
                        <br>
                        <p><a class="btn btn-primary" href="resources/docs/cv/index.php">Voir mon CV &raquo;</a></p>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center"><span class="text-muted">&copy; 2022 MARC Maxime</span> </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a href="https://www.linkedin.com/in/maximemarc51"><i class="icon fab fa-linkedin text-darkblue"></i></a></li>
            <li class="ms-3"><a href="https://github.com/maximemarc/"><i class="icon fab fa-github text-darkblue"></i></a></li>

            <li class="ms-3"><a href="https://twitter.com/maximemarc51"><i class="icon fab fa-twitter text-darkblue"></i></a></li>

            <li class="ms-3"><a href="https://maximemarc.online"><i class="icon fab fa-chrome text-darkblue"></i></a></li>
        </ul>
    </footer>
</body>

</html>