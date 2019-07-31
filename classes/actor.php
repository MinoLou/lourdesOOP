<?php

/**
 *
 */
class Actor {
  private $id;
  private $nombre;
  private $apellido;
  private $edad;

public function __construct($id, $nombre, $apellido)
  {
  $id->id = $id;
  $this->nombre = $nombre;
  $this->apellido = $apellido;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setEdad($edad){
    $this->edad = $edad;
  }

  public function getEdad(){
    return $this->edad;
  }

}
 ?>
