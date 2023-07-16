<?php


class Reclamation
{
    /**
     * @return mixed
     */
    public function getIdReclamation()
    {
        return $this->id_reclamation;
    }

    /**
     * @param mixed $id_reclamation
     */
    public function setIdReclamation($id_reclamation): void
    {
        $this->id_reclamation = $id_reclamation;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }
    private $id_reclamation ;
    private $description ;
    private $status ;

    /**
     * Reclamation constructor.
     * @param $id_reclamation
     * @param $description
     * @param $status
     */
    public function __construct($id_reclamation, $description, $status)
    {
        $this->id_reclamation = $id_reclamation;
        $this->description = $description;
        $this->status = $status;
    }

}