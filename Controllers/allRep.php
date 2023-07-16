<?php
include_once(__DIR__ . "/../services/ReponseService.php");
include_once(__DIR__ . "/../Entities/Reponse.php");


if (isset($_POST["reclamation_id"])){
    $repp=new ReponseService();

$listrep=$repp->getAllReponsesByReclamationId($_POST["reclamation_id"]);







    header('Location: ../../Views/back/AfficherReclamation.php');
}
?>