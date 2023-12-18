<?php

require_once 'Conexion.php';

class Alignment extends Conexion{
  private $pdo;

  public function __CONSTRUCT(){
    $this->pdo = parent::getConexion();
  }

  public function getAll($data = []){
    try {
      $consulta = $this->pdo->prepare("spu_listar_bandos_por_publishers(?)");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}