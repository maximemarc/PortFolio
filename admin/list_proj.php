<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("location: ../index.php");
}
?>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Dashboard|</title>
  <link rel="icon" type="img/png" href="../resources/img/logo.png" />
  <link href="../resources/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../index.php">PortFolio Maxime</a>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="deconnexion.php">Deconnexion</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " href="dashboard.php">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="crea_proj.php">
                Ajouter un projet
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                Liste des projets
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2"> Liste des projets</h1>
        </div>
        <div class="container">
          <div class="album py-5 bg-light">
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php


                require("connect.php");
                if ($c) {
                  $chaine_req = 'SELECT nom,description,id_proj,date FROM projet ORDER BY nom';
                  $req = pg_query($chaine_req);
                  $ligne = pg_fetch_all($req);
                  foreach ($ligne as $l) {

                ?>
                    <div class="col">
                      <div class="card shadow-sm"> <img alt="default screen project" width="100%" height="225" src=<?php
                                                                                          $img = '../projets/img/';
                                                                                          echo $img . $l['id_proj'] . '.png';
                                                                                          ?> class="bd-placeholder-img card-img-top" onerror="if (this.src != '../resources/img/default.jpg') this.src = '../resources/img/default.jpg';">
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
                                                                                                    echo '"location=\'../projets/index.php?id=' . $l['id_proj'] . '\'"';
                                                                                                    ?>>Voir</button>
                              <?php
                              if (isset($_SESSION['admin'])) {
                                echo '<button type="button" class="btn btn-sm btn-outline-primary"  onclick="location=\'edit_proj.php?id=' . $l['id_proj'] . '\'">Edit</button>';
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
                    <div class="card shadow-sm" id="ajout" onclick="location='crea_proj.php'">
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
        </div>
    </div>

    </main>
  </div>
  </div>
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