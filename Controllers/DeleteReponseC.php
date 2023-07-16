<?PHP
include_once(__DIR__ . "/../services/ReponseService.php");
include_once(__DIR__ . "/../Entities/Reponse.php");



if (isset($_POST["idReponse"])){
    $repp=new ReponseService();

    $repp->SupprimerReponse($_POST["idReponse"]);







    header('Location: ../Views/back/AfficherReponse.php');
}

?>

