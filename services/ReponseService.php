<?php
require_once(__DIR__ . "/../Util/DataSource.php");
include (__DIR__ . "/../Entities/Reponse.php");

class ReponseService
{
    function ajoutReponse($reponse)
    {

        $sql="INSERT INTO `reponse`( `description`, `dateTraitement`,rating, `reclamation_id`) VALUES ( :description, :dateTraitement,0, :idReclamation)";
        $db = DataSource::getConnexion();
        try{
            $req=$db->prepare($sql);       
            $description=$reponse->getDescription();
            $dateTraitement = date('Y-m-d H:i:s');
            $reclamation_id = $reponse->getReclamationId();
            $req->bindValue(':description',$description);
            $req->bindValue(':dateTraitement',$dateTraitement);
            $req->bindValue(':idReclamation',$reclamation_id);
            

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficherReclamationReponse(){

        $sql="SElECT * From reponse";
        $db = DataSource::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 

    function afficherReponse(){

        $sql="SElECT * From reponse";
        $db = DataSource::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 


    function modifierReponse($reponse)
    {
        $db = DataSource::getConnexion();
        $sql="UPDATE `reponse` SET `description`=:description WHERE `idReponse`=:id";
        try{

            $req=$db->prepare($sql);

            $id=$reponse->getIdReponse();
            
            $description=$reponse->getDescription();
            $req->bindValue(':id',$id);
            
            $req->bindValue(':description',$description);

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }



    function recupererReponse($id){
        $sql="SELECT * FROM `reponse` WHERE  idReponse=:id ";
        $db = DataSource::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
            $produit= $req->fetchALL(PDO::FETCH_OBJ);
            return $produit;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function SupprimerReponse($id){
        $sql="DELETE  from reponse where  idReponse=:id ";
        $db = DataSource::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
    function sendEmail($to, $subject, $message, $from) {
        
        $headers = "From: $from\r\n";
        $headers .= "Reply-To: $to\r\n";
        $headers .= "Content-Type: text/html\r\n";
        // Use the built-in mail function to send the email
        return mail($to, $subject, $message, $headers);
    }


    function rateResponse($idReponse, $rating) {
        $db = DataSource::getConnexion();
        $sql = "UPDATE `reponse` SET `rating` = :rating WHERE `idReponse` = :idReponse";
    
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':idReponse', $idReponse);
            $req->bindValue(':rating', $rating);
            $stmt->execute();
    
            return true;
        } catch (PDOException $e) {
            // Handle the exception
            return false;
        }
    }
    
    function getAllReponsesByReclamationId($reclamation_id) {
        $sql = "SELECT * FROM reponse WHERE reclamation_id = :reclamation_id";
        $db = DataSource::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':reclamation_id', $reclamation_id);
            $req->execute();
            $reponses = array();
            while ($row = $req->fetch()) {
                $reponse = new Reponse($row['idReponse'], $row['description'], $row['dateTraitement'], $row['rating'], $row['reclamation_id']);
                $reponses[] = $reponse;
            }
            return $reponses;
        } catch (Exception $e) {
            echo 'Erreur: '.$e->getMessage();
        }
    }
}