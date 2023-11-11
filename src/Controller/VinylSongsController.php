<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylSongsController extends AbstractController
{
    #[Route('/vinyl/songs', name: 'app_vinyl_songs')]
    public function index(): Response
    {
        return $this->render('vinyl_songs/index.html.twig', [
            'controller_name' => 'VinylSongsController',
        ]);
    }
}
