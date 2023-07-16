<?PHP
include_once(__DIR__ . "/../services/ReponseService.php");
include_once(__DIR__ . "/../Entities/Reponse.php");



if (isset($_POST["idReponse"])){
    $repp=new ReponseService();

    $reponse = new Reponse($_POST["idReponse"],$_POST["description"],null,null,null);
    var_dump($reponse);
    $repp->modifierReponse($reponse);
    header('Location: ../Views/back/AfficherReponse.php');
}else
    echo "No valid data";

?>

