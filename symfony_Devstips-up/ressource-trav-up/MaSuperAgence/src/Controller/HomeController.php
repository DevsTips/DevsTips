<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Repository\PropertyRepository;

class HomeController extends AbstractController
{
    /**
     * @var Environnement 
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    /**
     * @Route("/", name="home" )
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax 
     */
    public function index(PropertyRepository $repository): Response
    {
        $properties = $repository->findLatest();
        return $this->render('pages.home', [
            'properties' => $properties
        ]);
        // return new Response($this->twig->render('pages/home.html.twig'));
    }
}
