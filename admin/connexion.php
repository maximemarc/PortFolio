<?php
session_start();
if (isset($_SESSION['admin'])) {
    header("location: dashboard.php");
}
?>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>PortFolio|MARC Maxime</title>
    <link rel="icon" type="img/png" href="../resources/img/logo.png" />
    <link rel="icon" type="img/png" href="resources/img/logo.png" />
    <link href="../resources/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
</head>

<body>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="../index.php" class="nav-link">Acceuil</a></li>
            <li class="nav-item"><a href="../index.php#projet" class="nav-link">Projets</a></li>
            <li class="nav-item"><a href="../index.php#competence" class="nav-link">Compétences</a></li>
            <li class="nav-item"><a href="../sio.php" class="nav-link">BTS SIO</a></li>
            <li class="nav-item"><a href="../contact.php" class="nav-link ">Contact</a></li>
        </ul>
    </header>
    <main class="form-signin" id="taille">
        <form>
            <div class="form-group">
                <label for="email">Login</label>
                <input type="email" class="form-control" id="email" name="log" placeholder="Login" maxlength="10">
            </div>
            <div class="form-group">
                <label for="password">Mot de Passe</label>
                <input type="password" class="form-control" id="password" name="mdp" placeholder="Mot de Passe">
            </div>
            <small id="email" class="form-text text-muted">
                <?php
                $message[0] = "Attention, le couple login/mot de passe que vous avez saisi est incorrect.";
                $message[1] = "Problème d'accès à la base, contactez un administrateur.";
                $message[2] = "Attention, vous devez saisir un login et un mot de passe.";
                $message[3] = "Problème d'accès à une table, contactez un administrateur.";
                if (isset($_GET['error'])) {
                    echo $message[$_GET['error']];
                }
                ?>
            </small>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
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