<?php
include_once(__DIR__ . "/../../services/ReponseService.php");
include_once(__DIR__ . "/../../Entities/Reponse.php");

if(isset ($_POST['description']) )
{
    
    $Rep = new Reponse(0, $_POST['description'],'2023-05-03',0,$_POST["id_reclamation"]);
    $RepServ = new ReponseService();
    $RepServ->ajoutReponse($Rep);
    header('Location: ../../Views/front/AfficherReponse.php');

}
else{
    echo "verifier les champs";

}

        ?>