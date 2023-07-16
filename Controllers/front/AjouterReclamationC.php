<?php
include_once(__DIR__ . "/../../services/ReclamationService.php");
include_once(__DIR__ . "/../../Entities/Reclamation.php");

if(isset ($_POST['description']) )
{

    $Rec= new Reclamation(0,$_POST['description'],0);
    $RecServ = new ReclamationService();
    $RecServ->ajoutReclamation($Rec);
    header('Location: ../../Views/front/AfficherReclamation.php');

}
else{
    echo "verifier les champs";

}

?>