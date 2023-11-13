<?php

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\String\u;
use App\Service\MixRepository;

class VinylSongsController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

       

        return $this->render('vinyl/index.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }

    #[Route('/browse/{slug}', name: "app_browse")]
    public function browse( MixRepository $mixRepository,  string $slug = null): Response //optional parameters must go last in line
    {
       $genre = $slug ? u(str_replace('-', ' ', $slug)) : null;
       
       $mixes = $mixRepository->findAll();

    //    foreach ($mixes as $key => $mix) {
    //        $mixes[$key]['ago'] = $dateTimeFormatter->formatDiff($mix['createdAt']);
    //    }

      
        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
            'mixes' => $mixes,
        ]);
        
    }

   
}
