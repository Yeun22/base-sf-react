<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        $datas = [
            'name' => 'John',
            'age' => 30,
            'job' => 'Développeur'
        ];

        return $this->render('test/index.html.twig', [
            'props' => json_encode($datas),
        ]);
    }
}
