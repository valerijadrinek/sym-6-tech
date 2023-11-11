<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{
    #[Route('/song/api', name: 'app_song_api')]
    public function index(): Response
    {
        return $this->render('song_api/index.html.twig', [
            'controller_name' => 'SongApiController',
        ]);
    }
}
