<?php


class Reponse 
{
    /**
     * @return mixed
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * @param mixed $idReponse
     */
    public function setIdReponse($idReponse): void
    {
        $this->idReponse = $idReponse;
    }


    /**
     * @return mixed
     */
        public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDateTraitement()
    {
        return $this->dateTraitement;
    }

    /**
     * @param mixed $dateTraitement
     */
    public function setDateTraitement($dateTraitement): void
    {
        $this->dateTraitement = $dateTraitement;
    }

    public function getrating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @param mixed $reclamation_id
     */
    public function setReclamationId($reclamation_id)
    {
        $this->reclamation_id = $reclamation_id;
    }
    /**
     * @param mixed $reclamation_id
     */
    public function getReclamationId()
    {
        return $this->reclamation_id;
    }
    private $idReponse ;
    private $description ;
    private $dateTraitement ;
    private $rating ;
    private $reclamation_id;

    /**
     * Reclamation constructor.
     * @param $idReponse
     * @param $description
     * @param $dateTraitement
     * @param $rating
     * @param $reclamation_id
     */
    public function __construct($idReponse, $description, $dateTraitement,$rating,$reclamation_id)
    {
        $this->idReponse = $idReponse;
        $this->description = $description;
        $this->dateTraitement = $dateTraitement;
        $this->rating = $rating;
        $this->reclamation_id = $reclamation_id;
    }

}