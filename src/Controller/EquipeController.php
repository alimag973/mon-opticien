<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
     #[Route('/equipe/list/{page}', name:'equipe_list')]
     public function list(int $page): Response
     {
         return $this->render('equipe/list.html.twig', ['page' => $page]);
     }
}