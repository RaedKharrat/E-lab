<?php
require_once(__DIR__ . "/../Util/DataSource.php");
include (__DIR__ . "/../Entities/Reclamation.php");

class ReclamationService
{
    function ajoutReclamation($reclamation)
    {

        $sql="INSERT INTO `reclamation`( `id_reclamation`, `description`, `status`) VALUES (:id_reclamation,:description,:status)";
        $db = DataSource::getConnexion();
        try{
            $req=$db->prepare($sql);

            $id=$reclamation->getIdReclamation();
            $description=$reclamation->getDescription();
            $status=$reclamation->getStatus();

            $req->bindValue(':id_reclamation',$id);
            $req->bindValue(':description',$description);
            $req->bindValue(':status',$status);

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficherReclamation(){

        $sql="SElECT * From reclamation";
        $db = DataSource::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } function afficherReclamationUser($id){

        $sql="SElECT * From reclamation where id_user_rec = '$id '";
        $db = DataSource::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function
    modifierReclamation($reclamation)
    {
        $db = DataSource::getConnexion();
        $sql="UPDATE `reclamation` SET `description`=:description,`status`=:status WHERE `id_reclamation`=:id_reclamation";
        try{

            $req=$db->prepare($sql);

            $id=$reclamation->getIdReclamation();
            $description=$reclamation->getDescription();
            $status=$reclamation->getStatus();

            $req->bindValue(':id_reclamation',$id);
            $req->bindValue(':description',$description);
            $req->bindValue(':status',$status);

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }



    function recupererReclamation($id){
        $sql="SELECT * FROM `reclamation` WHERE  id_reclamation=:id ";
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
    function SupprimerReclamation($id){
        $sql="DELETE  from reclamation where  id_reclamation=:id ";
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
    function TraiterReclamation($id){
        $sql="Update  reclamation set Status = 1 where  id_reclamation=:id ";
        $db = DataSource::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } function TraiterReclamation2($id){
        $sql="Update  reclamation set Status = 0 where  id_reclamation=:id ";
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
}