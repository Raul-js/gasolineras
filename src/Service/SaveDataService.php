<?php

namespace App\Service;
use App\Service\GetDataService;
class GetDataService
{
    public function SaveDataFromWeb(): String
    {
       


        $dataGasolinera= $getdataservice->getDataFromWeb();
        
        if (!$dataGasolinera) {
             throw new NotFoundHttpException("not data");
        }

        

        return $dataGasolinera;
    }
}