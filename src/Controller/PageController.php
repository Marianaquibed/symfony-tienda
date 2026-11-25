<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', []);
    }
    #[Route('/about', name: 'about')]
    public function about(): Response
    {
    return $this->render('page/about.html.twig', []);
    }
    #[Route('/about', name: 'service')]
    public function service(): Response
    {
    return $this->render('page/service.html.twig', []);
    }
    #[Route('/about', name: 'product')]
    public function product(): Response
    {
    return $this->render('page/product.html.twig', []);
    }
    #[Route('/about', name: 'price')]
    public function price(): Response
    {
    return $this->render('page/price.html.twig', []);
    }
    #[Route('/about', name: 'team')]
    public function team(): Response
    {
    return $this->render('page/team.html.twig', []);
    }
    #[Route('/about', name: 'testimonial')]
    public function testimonial(): Response
    {
    return $this->render('page/testimonial.html.twig', []);
    }
    #[Route('/about', name: 'blog')]
    public function blog(): Response
    {
    return $this->render('page/blog.html.twig', []);
    }
    #[Route('/about', name: 'detail')]
    public function detail(): Response
    {
    return $this->render('page/detail.html.twig', []);
    }
    #[Route('/about', name: 'contact')]
    public function contact(): Response
    {
    return $this->render('page/contact.html.twig', []);
    }
}