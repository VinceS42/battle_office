<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/')]
class LandingPageController extends AbstractController
{
    
     #[Route('/', name: 'app_home')]
     
    public function index(Request $request): Response
    {
        //Your code here

        return $this->render('landing_page/index_new.html.twig', [

        ]);
    }
    
    
    #[Route('/confirmation', name: 'app_confirmation')]
    public function confirmation()
    {
        return $this->render('landing_page/confirmation.html.twig', [

        ]);
    }
}
