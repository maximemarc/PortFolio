<?php
session_start();
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>PortFolio|MARC Maxime</title>
    <link rel="icon" type="img/png" href="resources/img/logo.png" />
    <link href="resources/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="d-flex justify-content-center py-3" id="top">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Acceuil</a></li>
            <li class="nav-item"><a href="#projet" class="nav-link">Projets</a></li>
            <li class="nav-item"><a href="#competence" class="nav-link">Compétences</a></li>
            <li class="nav-item"><a href="sio.php" class="nav-link">BTS SIO</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php
            if (isset($_SESSION["admin"])) {
                echo '<li class="nav-item"><a href="admin/dashboard.php" class="nav-link">DashBoard</a></li>';
            }
            ?>
        </ul>
    </header>
    <main>
        <section>
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h1 class="display-4 fw-bold">BIENVENUE SUR LE PORTFOLIO</h1>
                <h1 class="display-4 fw-bold">DE MARC MAXIME</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">VOUS Y RETROUVEREZ L'ENSEMBLE DE MES RÉALISATIONS</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"> <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#projet">Voir les Projet</a> </div>
                </div>
                <div class="overflow-hidden">
                    <div class="container px-5" style="max-height: 62vh;"> <img src="resources/img/hero.svg" class="img-fluid border rounded-3 shadow-sm-lg mb-4" alt="image previw" width="700" height="500" loading="lazy"> </div>
                </div>
            </div>
        </section>
        <div id="scrollUp">
            <a href="#top"><img src="resources/img/top.png" /></a>
        </div>
        <section class="purple">
            <div class="row featurette">
                <div class="col-md-7 align-content-center" style="color:#FBD2D3">
                    <h1 class="featurette-heading text-center">Cyber Sécurité</h1>
                    <p class="lead text-center text-capitalize"><strong>La Cyber Sécurité est de nos jours un en jeu majeur pour les entreprises</strong></p>
                    <p class="lead text-center">c'est pourquoi notre BTS le mes en avant pour:</p>
                    <ul style="margin-left: 30%;">
                        <li class="lead">avoir les bonnes pratiques</li>
                        <li class="lead">Secure By design</li>
                        <li class="lead">Conseiller au mieux les entreprises pour limiter les Risques</li>
                        <li class="lead">ETC</li>
                    </ul>
                    <br>
                </div>
                <div class="col-md-5"> <img src="resources/img/cs.svg" alt="cyber sécu" width="500" height="500" class="img-fluid"> </div>
            </div>
        </section>
        <section>
            <div class="container px-4 py-5">
                <h2 class="pb-2 border-bottom" id="competence">Compétences</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded">
                        <i class="bi fas fa-file-powerpoint text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">Logiciel Adobe</h4>
                            <br>
                            <p>Adobe Photoshop</p>
                            <p>Adobe Dreamweare</p>
                            <p>Adobe XD</p>
                            <p>Premiere Pro</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded">
                        <i class="bi fas fa-file-lines text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">Suite Office et LibreOffice </h4>
                            <p>Mise en Forme de documents</p>
                            <p>WORLD</p>
                            <p>Excel</p>
                            <p>Power point</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded">
                        <i class="bi fas fa-database text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">SQL</h4>
                            <br>
                            <p>Travail sur des bases de données relationnel</p>
                            <p>PostgreSQL</p>
                            <p>MySql</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded">
                        <i class="bi fas fa-disease text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">UX/UIX</h4>
                            <br>
                            <p>Je débute&nbsp; dans ce domaine mais je me renseignes énorméments sur le sujet&nbsp; &nbsp; &nbsp; &nbsp;</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded">
                        <i class="bi fas fa-code text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">Langage de Programation</h4>
                            <br>
                            <p>C++</p>
                            <p>PHP</p>
                            <p>HTLM/CSS/JS</p>
                            <p>Java</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded ">
                        <i class="bi fas fa-computer text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">Réseaux</h4>
                            <br>
                            <p>Configuratio et installation de Serveur</p>
                            <p>Installation de debian</p>
                            <p>Configuration de firewall, switch, routeur</p>
                            <p>Docker</p>

                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded ic">
                        <i class="bi fas fa-code-fork text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">Architecture Web</h4>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start shadow-sm p-3 mb-5 bg-body rounded">
                        <i class="bi fab fab fa-redhat text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"></i>
                        <div>
                            <h4 class="fw-bold mb-0">Cyber Sécurité</h4>
                            <br>
                            <p>Secure By design</p>
                            <p>Les Bonnes pratiques a avoir</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid purple">
            <div class="row">
                <div class="col-md-8 order-md-2 text-center " style="color:#FBD2D3; margin-top:10%">
                    <div class="row">
                        <div class="col-3">
                            <i class="fas fa-align-justify"></i>
                            <span style="font-size:20px;">1350H</span>
                            <br>
                            <span class="counter-text">TOTAL</span>
                        </div>
                        <div class="col-3">
                            <i class="fas fa-code"></i>
                            <span style="font-size:20px;">576H</span>
                            <br>
                            <span class="counter-text">DEVELOPPEMENT</span>
                        </div>
                        <div class="col-3">

                            <i class="fab fa-redhat"></i>
                            <span style="font-size:20px;">200H</span>
                            <br>
                            <span class="counter-text">CYBERSECURITE</span>
                        </div>
                        <div class="col-3">
                            <i class="fas fa-book"></i>
                            <span style="font-size:20px;">600H</span>
                            <br>
                            <span class="counter-text">GENERAUX</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 order-md-1"> <img src="resources/img/info.svg" alt="robot info" width="500" height="500" class="img-fluid"> </div>
            </div>
        </section>
        <section>
            <div class="px-4 pt-5 my-5 text-center border-bottom">
                <h2 class="display-4 fw-bold" id="projet">PROJETS</h2>
            </div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <?php

                        require("admin/connect.php");
                        if ($c) {
                            $chaine_req = 'SELECT nom,description,id_proj,date FROM projet ORDER BY nom';
                            $req = pg_query($chaine_req);
                            $ligne = pg_fetch_all($req);
                            foreach ($ligne as $l) {
                        ?>
                                <div class="col">
                                    <div class="card shadow-sm"> <img height="225" class="bd-placeholder-img card-img-top" alt="image de projet" src=<?php
                                                                                                                                                        $img = 'projets/img/';
                                                                                                                                                        echo $img . $l['id_proj'] . '.png';
                                                                                                                                                        ?> onerror="if (this.src != 'resources/img/default.jpg') this.src = 'resources/img/default.jpg';">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <?php
                                                echo '<h4>' . $l['nom'] . '</h4>';
                                                echo '<p>' . $l['description'] . '<p>';
                                                ?>
                                            </p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick=<?php
                                                                                                                            echo '"location=\'projets/index.php?id=' . $l['id_proj'] . '\'"';
                                                                                                                            ?>>Voir</button>
                                                    <?php
                                                    if (isset($_SESSION['admin'])) {
                                                        echo '<button type="button" class="btn btn-sm btn-outline-primary" onclick="location=\'admin/edit_proj.php?id=' . $l['id_proj'] . '\'">Edit</button>';
                                                    }
                                                    ?>
                                                </div>
                                                <small class="text-muted">
                                                    <?php
                                                    echo $l['date'];
                                                    ?>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            echo "erreur de connexion à la base de donnée";
                        }
                        if (isset($_SESSION["admin"])) {
                            ?>
                            <div class="col">
                                <div class="card shadow-sm" id="ajout" onclick="location='admin/crea_proj.php'">
                                    <svg class="bd-placeholder-img card-img-overlay" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: ajout" preserveAspectRatio="xMidYMid slice">
                                        <rect width="100%" height="100%" fill="#55595c" />
                                        <text x="50%" y="50%" fill="#eceeef">Ajouter un Projet</text>
                                    </svg>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <?php
                                        echo '<h4>' . $l['nom'] . '</h4>';
                                        echo '<p>' . $l['description'] . '<p>';
                                        ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <small class="text-muted">
                                            <?php
                                            echo $l['date'];
                                            ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                    </div>
                <?php
                        }
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary" href="resources/docs/e4_page_garde.pdf" target="_blank">Page de Garde &raquo;</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary" href="resources/docs/e4_synthese.pdf" target="_blank">Tableau de Synthese &raquo;</a>
                </div>
            </div>
        </section>
        <hr class="featurette-divider">
        <section>
            <div class="container marketing">
                <div class="row">
                    <div class="col-lg-4"> </div>
                    <div class="col-lg-4"> <img src="resources/img/moi.jpg" alt="photo de moi " width="137" height="140" class="rounded-circle">
                        <h2>MARC Maxime</h2>
                        <p>Etudiant en deuxième année du BTS SIO </p>
                        <p><a class="btn btn-primary" href="resources/docs/cv/index.php">Voir mon CV &raquo;</a></p>
                    </div>
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