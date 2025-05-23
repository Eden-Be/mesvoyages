<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * Description of AcceuilController
 *
 * @author edenb
 */
#[Route('/', name: 'acceuil')]
class AcceuilController {
    
    public function index(): Response{
        return new Response ('Hello world !');
    }   
}
