<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of AcceuilController
 *
 * @author edenb
 */
class AccueilController extends AbstractController{
    
    #[Route('/', name: 'accueil')]
    public function index(): Response{
        return $this->render("pages/accueil.html.twig");
    }   
}
