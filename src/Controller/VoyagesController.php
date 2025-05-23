<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of VoyagesController
 *
 * @author edenb
 */
class VoyagesController extends AbstractController{
    
    #[Route('/voyages', name: 'voyages')]
    public function index(): Response {
        return $this->render("pages/voyages.html.twig");
    }
}
