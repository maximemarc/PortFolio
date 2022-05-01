<?php
session_start();
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>BTS SIO</title>
    <link rel="icon" type="img/png" href="../resources/img/logo.png" />
    <link href="../resources/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
</head>

<body>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="../index.php" class="nav-link active" aria-current="page">Acceuil</a></li>
            <li class="nav-item"><a href="../index.php#projet" class="nav-link">Projets</a></li>
            <li class="nav-item"><a href="../index.php#competence" class="nav-link">Compétences</a></li>
            <li class="nav-item"><a href="../sio.php" class="nav-link">BTS SIO</a></li>
            <li class="nav-item"><a href="../contact.php" class="nav-link ">Contact</a></li>
            <?php
            if (isset($_SESSION["admin"])) {
                echo '<li class="nav-item"><a href="../admin/dashboard.php" class="nav-link">DashBoard</a></li>';
            }
            ?>
        </ul>
    </header>
    <main>
        <?php
        require('../admin/connect.php');
        if ($c) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                $id = 0;
            }
            $req = 'select count(id_proj) from projet';
            $proj = pg_fetch_row(pg_query($req))[0];
            if ($proj == 0 || $proj == null) {
                header('Location: ../index.php');
            }

            $req = 'select nom, description from projet where id_proj = ' . $id;
            $exec = pg_query($req);
            $res = pg_fetch_row($exec);
        ?>
            <section class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal"> <?php echo $res[0]; ?></h1>
                <p class="fs-5 text-muted"><?php echo $res[1]; ?></p>
            </section>
            <br>
            <section class="container text-center">
                <img width="350 " height="350" alt="image de projet" src=<?php
                                                                            $img = 'img/';
                                                                            echo $img . $id . '.png';
                                                                            ?> onerror="if (this.src != '../resources/img/default.jpg') this.src = '../resources/img/default.jpg';">




            </section>
            <br>
            <section class="container text-center">
                <?php
                echo '<a class="btn btn-primary" type="button" href="pdf/' . $id . '.pdf" target="_blank">Voir la Présentation</a>'; ?>
            </section>
            <br>
            <section class="container text-center">
                <?php
                echo '<a class="btn btn-warning" type="button" href="src/' . $id . '.zip">Telecharger le code source</a>'; ?>
            </section>
            <br>
            <section class="container text-center">

                <a class="btn btn-success" type="button" href="https://github.com/maximemarc/" target="_blank"><i class="icon fab fa-github text-darkblue"></i>Tous les Codes Sources</a>
            </section>
        <?php
        } else {
            echo 'erreur de connection à la base de données';
        }
        ?>
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