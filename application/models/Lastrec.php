<?php

/**
 * Created by PhpStorm.
 * User: Medteck
 * Date: 14/04/2017
 * Time: 06:18
 */
class Lastrec
{

    public $id ;
    public $nomPatient  ;
    public $prenomPatient  ;
    public $agePatient ;
    public $codeAna ;
    public $numExam ;
    public $service;
    public $statut ;

    public function  __construct($id , $nomPatient ,  $prenomPatient ,   $agePatient , $codeAna ,$numExam ,$service ,  $statut  )
    {
        $this->id  =  $id ;
        $this->nomPatient  =  $nomPatient ;
        $this->prenomPatient  =  $prenomPatient ;
        $this->agePatient =  $agePatient ;
        $this->codeAna  =  $codeAna ;
        $this->numExam  =  $numExam ;
        $this->service  =  $service ;
        $this->statut  =  $statut ;
    }
    public static  function get_lastrec ()
    {
        $tab  = [] ;
        $db = Database::getInstance() ;
        $req = $db->query("SELECT * FROM myelogramme ORDER BY id DESC");
        $datas = $req->fetchAll() ;
        foreach ($datas as $data) {
            $tab []  =  new Lastrec($data['id'],$data['nomPatient'],$data['prenomPatient'],$data['agePatient'] , $data['$odeAna']  , $data['numExam']  , $data['service']  , $data['statut']) ;
        }
        return $tab ;
    }
}
