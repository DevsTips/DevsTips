<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\ObjectManager;

class PropertyController extends AbstractController
{
    /**
     * @var PropertyRepository
     */
    private $repository;
    /**
     * @var ObjectManager
     */
    private $em;
    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
        //$this->em = $em;
    }
    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        //$property =  $this->repository->findAllVisible();
        //$property = $repository->findLatest();
        $property =  $this->repository->findOneby(['floor' => 4]);
        $property[0]->setSold(true);
        $this->em->flush();

        dump($property);
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties'
        ]);
    }
}
