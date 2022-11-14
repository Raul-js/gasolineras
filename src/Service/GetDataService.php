<?php
// src/Service/GetDataService.php
namespace App\Service;

class GetDataService
{
    public function getDataFromWeb(): String
    {
       


        $dataGasolinera = file_get_contents('https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/');
        
        if (!$dataGasolinera) {
             throw new NotFoundHttpException("not data");
        }

        return $dataGasolinera;
    }
}