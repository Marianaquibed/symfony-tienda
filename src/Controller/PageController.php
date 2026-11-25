<?php

namespace App\Controller;

use App\Service\TeamService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    private TeamService $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $team = $this->teamService->getTeam();

        return $this->render('page/index.html.twig', [
            'team' => $team,
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        $team = $this->teamService->getTeam();

        return $this->render('page/about.html.twig', [
            'team' => $team,
        ]);
    }

    #[Route('/service', name: 'service')]
    public function service(): Response
    {
        return $this->render('page/service.html.twig', []);
    }

    #[Route('/product', name: 'product')]
    public function product(): Response
    {
        return $this->render('page/product.html.twig', []);
    }

    #[Route('/price', name: 'price')]
    public function price(): Response
    {
        return $this->render('page/price.html.twig', []);
    }

    #[Route('/team', name: 'team')]
    public function team(): Response
    {
        $team = $this->teamService->getTeam();

        return $this->render('page/team.html.twig', [
            'team' => $team,
        ]);
    }

    #[Route('/testimonial', name: 'testimonial')]
    public function testimonial(): Response
    {
        return $this->render('page/testimonial.html.twig', []);
    }

    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('page/blog.html.twig', []);
    }

    #[Route('/detail', name: 'detail')]
    public function detail(): Response
    {
        return $this->render('page/detail.html.twig', []);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', []);
    }
}