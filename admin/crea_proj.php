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
  <link rel="icon" type="img/png" href="resources/img/logo.png" />
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
              <a class="nav-link active" aria-current="page" href="#">
                Ajouter un projet
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="list_proj.php">
                Liste des projets
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Ajout de Projet</h1>
        </div>
        <div class="container">
          <form method="post" action="crea_proj_go.php" enctype="multipart/form-data">
            <div class="row g-3">
              <div class="col-12">
                <label for="nom" class="form-label">Nom du projet</label>
                <input type="text" class="form-control" id="nom" name="nom" maxlength="20" required>
                <div class="invalid-feedback">
                  Un Nom de projet est requis
                </div>
              </div>
              <div class="col-12" style="padding-bottom: 5vh;">
                <label for="desc" class="form-label">Courte Description</label>
                <input type="text" class="form-control" name="desc" id="desc" maxlength="500" required>
                <div class="invalid-feedback">
                  Une Description de projet est requise
                </div>
              </div>
              <div class="col-12" style="padding-bottom: 5vh;">
                <label for="img" class="form-label">Image pour le projet<span class="text-muted"> (Optionnel)</span>: </label>
                <input type="file" id="img" name="file" accept="image/png">
                <div class="invalid-feedback">
                  merci de mettre une image valide aux format png
                </div>
              </div>
              <div class="col-12" style="padding-bottom: 5vh;">
                <label for="PDF" class="form-label">PDF pour le projet<span class="text-muted"></span>: </label>
                <input type="file" id="PDF" name="fp" accept=".pdf" required>
                <div class="invalid-feedback">
                  merci de mettre un PDF valide
                </div>
              </div>
              <div class="col-12" style="padding-bottom: 5vh;">
                <label for="zip" class="form-label">Sources pour le projet<span class="text-muted"> </span>: </label>
                <input type="file" id="zip" name="fz" accept=".zip" required>
                <div class="invalid-feedback">
                  merci de mettre un Zip valide
                </div>
              </div>
              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Ajouter un Projet</button>
          </form>
        </div>
      </main>
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