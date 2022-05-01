<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../index.php");
}
require('connect.php');
$id = intval($_GET['id']);
$req = 'DELETE FROM projet WHERE id_proj = ' .$id;
var_dump($req);
$exec = pg_query($req);
if($exec)
    {
    header('Location:list_proj.php');
    }
else
    {
    echo 'probleme lors de lors de la suppression';
    }
?>
