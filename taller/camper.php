<?php
 class Camper{

  //1. atributos con modificadores de acceso
  //private,public,protected
  private $nombre ;
  private $email;
  private $celular;

  //2. constructor (metodo magico)
  //En ocasiones se inicializa con valores paramerizados
  public function __construct($nombre,$email,$celular){
    //ideal para inicializar valores de propiedades
    $this->nombre = $nombre;
    $this->email = $email;
    $this->celular = $celular;

  }
  //3. metodos (getters and setters)
  //get --> obtener valores de atributos
  //metodos getter
  public function getNombre(){
    return $this->nombre;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getCelular(){
    return $this->celular;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function setCelular($celular){
    $this->celular = $celular;
  }

  //set --> modificar valores de atributos

  //
 }

 //instancia de la clase (objeto) --> variable de la instancia
 $camper = new Camper("jhon","jhon@gmail.com",3163034427);
 
 echo "{$camper->getNombre()} <br>";
 echo $camper->getEmail()."<br>";
 echo $camper->getCelular()."<br>";
 echo "<br><br><br><br><br><br><br><br><br> ";

 $camper->setNombre("equis");
 $camper->setEmail("equis@gmail.com");
 $camper->setCelular(3158091367);
 echo "{$camper->getNombre()} <br>";
 echo $camper->getEmail()."<br>";
 echo $camper->getCelular()."<br>";



 



?>