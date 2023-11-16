<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class MixController extends AbstractController
{
    #[Route('/mix/new')]
    public function new(): Response
    {
        dd('new mix');
    }
}