<?php
session_start();
?>
<html lang="fr">
<head>
  <title>Curriculum vitae</title>
  <meta charset="utf-8">
  <link href="../../fontawesome/css/all.min.css" rel="stylesheet">
  <link rel="icon" type="img/png" href="../../img/logo.png" />
  <link href="css/style.css" rel="stylesheet">
  <link href="../../../css/bootstrap-4.4.1.css" rel="stylesheet">
</head>

<body>
  <header class="d-flex justify-content-center py-3" id="top">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="../../../index.php" class="nav-link active" aria-current="page">Acceuil</a></li>
        <li class="nav-item"><a href="../../../index.php#projet" class="nav-link">Projets</a></li>
        <li class="nav-item"><a href="../../../index.php#competence" class="nav-link">Compétences</a></li>
        <li class="nav-item"><a href="../../../sio.php" class="nav-link">BTS SIO</a></li>
        <li class="nav-item"><a href="../../../contact.php" class="nav-link">Contact</a></li>
        <?php
        if (isset($_SESSION["admin"])) {
            echo '<li class="nav-item"><a href="admin/dashboard.php" class="nav-link">DashBoard</a></li>';
        }
        ?>
    </ul>
</header>
  <div class="cv-container">
    <div class="left-column">
      <img class="portait" src="../../img/moi.jpg" />
      <div class="section">
        <p>
          <i class="icon fab fa-linkedin text-darkblue"></i><a class="text-white" href="https://www.linkedin.com/in/maximemarc51" target="_blank">MARC Maxime</a>
        </p>
        <p>
          <i class="icon fab fa-github text-darkblue"></i><a class="text-white" href="https://github.com/maximemarc/" target="_blank">@maximemarc</a>
        </p>
        <p>
          <i class="icon fab fa-twitter text-darkblue"></i><a class="text-white" href="https://twitter.com/maximemarc51" target="_blank">@maximemarc51</a> 
        </p>
        <p>
          <i class="icon fab fa-chrome text-darkblue"></i><a class="text-white" href="https://maximemarc.online" target="_blank">Mon site internet</a> 
        </p>
      </div>
      <div class="section">
        <h2>À PROPOS</h2>
        <p>
          Je m'intéresse beaucoup aux nouvelles technologies, ainsi qu'au
          développement. <br>
          Je vais toujours au bout des choses et j'essaie de le faire le mieux
          possible.<br>
          <strong>(Je suis véhiculé)</strong>
        </p>

      </div>
      <div class="section">
        <h2>COMPÉTENCES</h2>
        <ul class="skills">

          <li><i class="icon fas fa-check-circle text-darkblue"></i> Bootstrap</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> HTML5 &#124; CSS3 &#124; SASS</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> Javascript</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> PHP</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> C++</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> Java</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> PostgreSLQ</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> MySQL</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> Git &#124; Github</li>
          <li><i class="icon fas fa-check-circle text-darkblue"></i> Windows &#124; Linux &#124; MacOS</li>
        </ul>
      </div>
      <div class="section">
        <h2>Langues</h2>
        <p>
          Français <br>
          Anglais
          <br>
          Espagnol
        </p>
      </div>
      <div class="section">
        <h2>Centres d'intérêt</h2>
        <p>
          Informatique
          <br>
          Musique
          <br>
          Sport
        </p>
      </div>
    </div>
    <div class="right-column">
      <div class="header">
        <h1>Maxime <span class="text-blue text-uppercase">MARC</span></h1>
        <p>Etudiant en 2eme année du BTS SIO</p>
        <ul class="infos">
          <li><i class="icon fas fa-at text-blue"></i> <a
              href="mailto:maxime@development-for-future.tech">maxime@development-for-future.tech</a></li>
          <li><i class="icon fas fa-phone text-blue"></i> 06 51 43 50 87</li>
          <li><i class="icon fas fa-map-marker-alt text-blue"></i> 9 rue du général edmond buat,51000
            Châlons-en-champagne </li>
        </ul>
      </div>
      <div class="content">
        <div class="section">
          <h2>Expériences <br><span class="text-blue">professionelles</span></h2>
          <p>
            <strong>2020</strong>
            <br>
            Permis B, je suis en possession d’une voiture
          </p>
        </div>
        <div class="section">
          <p>
            <strong>2018 <i class="fas fa-long-arrow-alt-right"></i> aujourd'hui</strong>
            <br>
            Sapeur Pompier Volontaire, j'ai réalisé ma formation initiale, Je suis actuellement 1er Classe
          </p>
        </div>
        <div class="section">
          <p>
            <strong>2022</strong>
            <br>
            Stagiaire pendant 5 semaines, en développement applicatif chez <em>Reims-Aerospace</em>
          </p>
          <ul class="experience-list">
            <li>Réalisation de sites web pour différents aplicatifs</li>
            <li>Animations CSS / JS</li>
            <li>Responsive design</li>
            <li>UI / UX Design</li>
            <li>utilisation de PHP</li>
            <li>utilisation de PostgreSLQ</li>
            <li>Optimisation</li>
            <li>audit de sécurité</li>
            <li>utilisation quotidienne de Trello et Github</li>
          </ul>
        </div>
        <div class="section">
          <p>
            <strong>2021</strong>
            <br>
            Stagiaire pendant 5 semaines chez <em>SI-champagne</em>
          </p>
          <ul class="experience-list">
            <li>Mise en place et création d'un site sous WordPress</li>
            <li>Installation de serveurs avec leur configuration</li>
            <li>Paramétrage de multiples appareils informatiques (Rooteur,Switch,ordinateur,...)</li>
            <li>Réparation d'appareils informatiques</li>
          </ul>
        </div>
        <div class="section">
          <h2>Études <br><span class="text-blue">& formations</span></h2>
          <p>
            <strong>2020 <i class="fas fa-long-arrow-alt-right"></i> 2022</strong>
            <br>
            <em>BTS SIO: Informatique au organisation</em>, Titulaire d'un Bac+2, Lycée Franklin Roosevelt - Reims 51100
          </p>
          <p>
            <strong>2016 <i class="fas fa-long-arrow-alt-right"></i> 2020</strong>
            <br>
            <em>Diplome National Du Baccalauréat</em>,Lycée Étienne Oemichen - Châlons-en-champagne 51000
          </p>
        </div>

      </div>
    </div>
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