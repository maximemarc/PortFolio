<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("location: ../index.php");
}
require("connect.php")
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
  <script type="text/javascript">
    function suppr(id) {
      if (confirm('Confirmez-vous la suppression ?')) {
        window.location.href = 'supprimer_proj.php?id=' + id;
      }
    }
  </script>
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
              <a class="nav-link active" href="list_proj.php">
                Liste des projets
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Modification de Projet</h1>
        </div>
        <?php
        if (!isset($_GET['id'])) {
          $select = 0;
        } else {
          $select = $_GET['id'];
        }
        $req = 'SELECT nom,description,id_proj from projet where id_proj =' . $select;
        $r = pg_query($req);
        $tab = pg_fetch_row($r);
        ?>
        <div class="container">
          <div class="container">
            <div class="col-12" style="padding-bottom: 5vh;">
              <?php
              echo '<a class="w-20 btn btn-danger btn-lg align-content-center" onclick="suppr(' . $tab[2] . ')">Supprimer le Projet</a>';
              ?>
            </div>
          </div>
          <form method="post" action="edit_proj_go.php" enctype="multipart/form-data">
            <div class="row g-3">
              <div class="col-12">
                <label for="nom" class="form-label">Nom du projet</label>
                <?php
                echo '<input type="hidden" name="id" value="' . $tab[2] . '">';
                echo '<input type="text" class="form-control" id="nom" name="nom" maxlength="20" value="' . $tab[0] . '" required>';
                ?>
                <div class="invalid-feedback">
                  Un Nom de projet est requis
                </div>
              </div>

              <div class="col-12" style="padding-bottom: 5vh;">
                <label for="desc" class="form-label">Courte Description</label>
                <?php
                echo '<input type="text" class="form-control" id="desc" name="desc" value="' . $tab[1] . '" required>';
                ?>
                <div class="invalid-feedback">
                  Une Description de projet est requise
                </div>
              </div>
              <div class="col-12" style="padding-bottom: 5vh;">

                <label for="img" class="form-label">


                  <?php
                  echo '<img  width="200" heigth="200" alt="image de projet" src="../projets/img/' . $tab[2] . '.png">';

                  echo '</label>';
                  echo '<input type="file" id="img" name="file" style="display:none"   accept="image/png">';
                  ?>
                  <div class="invalid-feedback">
                    merci de mettre une image valide
                  </div>
              </div>
              <div class="col-12" style="padding-bottom: 5vh;">
                <label for="PDF" class="form-label">PDF pour le projet<span class="text-muted"></span>: </label>
                <input type="file" id="PDF" name="fp" accept=".pdf" >
                <div class="invalid-feedback">
                  merci de mettre un PDF valide
                </div>
              </div>
              <div class="col-12" style="padding-bottom: 5vh;">
                <label for="zip" class="form-label">Sources pour le projet<span class="text-muted"> </span>: </label>
                <input type="file" id="zip" name="fz" accept=".zip" >
                <div class="invalid-feedback">
                  merci de mettre un Zip valide
                </div>
              </div>
              <hr class="my-4">
              <button class="w-100 btn btn-primary btn-lg" type="submit">Modifier le Projet</button>
          </form>
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