<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';
require_once '../../modelo/estacionamiento.php';


//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

$e = new Estacionamiento();
$e->Patente=$req->PatenteVehiculo;
$e->TipoVehiculo=$req->TipoVehiculo;
$e->Usuario=$req->UsuarioAlta;

$resp->Estacionamiento=$e;
$resp->Isok=True;







echo json_encode ($resp);