<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../index.php");
}
require('connect.php');
if ($c) {
    if (isset($_FILES)) {
        if (isset($_FILES['file'])) {
            $path = $_FILES['file']['tmp_name'];
        }
        if (isset($_FILES['fp'])) {
            $pp = $_FILES['fp']['tmp_name'];
        }
        if (isset($_FILES['fz'])) {
            $pz = $_FILES['fz']['tmp_name'];
        }
    }


    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    $recherche = array(';');
    $remp = array('_');
    $verif = str_replace($recherche, $remp, $desc);
    $verif2 = str_replace($recherche, $remp, $nom);
    if ($verif == $desc && $verif2 == $nom && strlen($nom) <= 20) {
        $max = intval(pg_fetch_row(pg_query('SELECT max(id_proj)+1 from projet'))[0]);
        if ($max == false || $max == null) {
            $max = 0;
        }
        $req = 'insert into projet(id_proj,nom,description,date) values(' . $max . ',\'' . $nom . '\',\'' . $desc . '\',now())';
        var_dump($req);
        $exec = pg_query($req);
        if ($exec) {
            if (isset($_FILES)) {
                if (isset($_FILES['file'])) {
                    $target = '../projets/img/' . $max . '.png';
                    move_uploaded_file($path, $target);
                }
                if (isset($_FILES['fp'])) {
                    $target2 = '../projets/pdf/' . $max . '.pdf';
                    move_uploaded_file($pp, $target2);
                }
                if (isset($_FILES['fz'])) {
                    $target3 = '../projets/src/' . $max . '.zip';
                    move_uploaded_file($pz, $target3);
                }
            }
            header('Location:list_proj.php');
        } else {
            echo 'probleme lors de l\'insertion';
        }
    } else {
        echo 'la vérification a rejeté la création du projet';
    }
}
