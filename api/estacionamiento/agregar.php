<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';

//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();
$resp->IsOk=true;

if($req->TipoVehiculo =='Auto'){

    $resp->Mensaje='Ok';

}
else if ($req->TipoVehiculo =='Moto'){

    $resp->Mensaje='Ok';

}
else if($req->TipoVehiculo =='PickUp'){

    $resp->Mensaje='Ok';
}
else{

    $resp->Mensaje="Tipo vehículo no existe";

}



echo json_encode ($resp);