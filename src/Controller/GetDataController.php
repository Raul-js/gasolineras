<?php

namespace App\Controller;
use App\Service\GetDataService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class GetDataController extends AbstractController
{
    // #[Route('/get/data', name: 'app_get_data')]
    // public function index(): Response
    // {
    //     return $this->render('get_data/index.html.twig', [
    //         'controller_name' => 'GetDataController',
    //     ]);
    // }


    public function getData(GetDataService $getdataservice): Response
    {
      
        $dataGasolinera= $getdataservice->getDataFromWeb();
         $datos = json_encode($dataGasolinera); 
         
        return $this->render('get_data/index.html.twig', [
            'dataGasolinera' =>  $dataGasolinera,
                     'controller_name' => 'GetDataController',
                ]);
    }
}
