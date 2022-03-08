<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class BlogController extends AbstractController
{
    /**
     * @Route("/blog/index")
     *
     *@return Response
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', []);
    }

    /**
     * @Route ("/blog/lista")
     * @return Response
     */
    public function Lista(): Response
    {
        return $this->render('blog/lista.html.twig', []);
    }

    /**
     * @Route ("/blog/login")
     * @return Response
     */

    public function Login(): Response
    {
        return $this->render('blog/login.html.twig', []);
    }

}