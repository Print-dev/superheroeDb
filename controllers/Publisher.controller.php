<?php

require_once '../models/Publisher.php';

if(isset($_GET['operacion'])){
  $publisher = new Publisher();

  if($_GET['operacion'] == 'listarPublishers'){
    $resultado = $publisher->getAll();
    echo json_encode($resultado);
  }
}