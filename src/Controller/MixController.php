<?php
namespace App\Controller;
use App\Entity\VinylMix;
use App\Repository\VinylMixRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MixController extends AbstractController
{
    #[Route('/mix/new',  name:'app_new_mix')]
    public function new(EntityManagerInterface $entityManager): Response
    {
        $mix = new VinylMix();
        $mix->setTitle('Do you Remember... Phil Collins?!');
        $mix->setDescription('A pure mix of drummers turned singers!');
        $genres = ['pop', 'rock'];
        $mix->setGenre($genres[array_rand($genres)]);
        $mix->setTrackCount(rand(5, 20));
        $mix->setVotes(rand(-50, 50));
        $entityManager->persist($mix);
        $entityManager->flush();
        return new Response(sprintf(
            'Mix %d is %d tracks of pure 80\'s heaven',
            $mix->getId(),
            $mix->getTrackCount()
        ));
    }

    #[Route('/mix/{slug}',  name:'app_mix_show')]
    public function show(VinylMix $mix) : Response
    {

        return $this->render('mix/show.html.twig', [
            'mix' => $mix,
        ]);

    }

    #[Route('/mix/{id<\d+>}/vote', name: 'app_mix_vote', methods: ['POST'])]
    public function vote(Request $request, EntityManagerInterface $em, VinylMix $mix) : Response
    {
        $direction = $request->request->get('direction', 'up');
        if ($direction === 'up') {
            $mix->upVotes();
        } else {
            $mix->downVotes();
        }
        $em->flush();
        $this->addFlash('success', 'Vote counted!');
        
        return $this->redirectToRoute('app_mix_show', [
            'slug' => $mix->getSlug(),
        ]
        );
    }
}