<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ItemsController extends AbstractController
{
    #[Route('/items/{id}', name: 'app_items')]
    public function index(int $id): Response
    {
        return $this->render('items/index.html.twig', [
            'controller_name' => 'ItemsController ' . $id,
        ]);
    }
}
