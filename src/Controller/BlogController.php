<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class BlogController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     * @throws \Exception
     */
    public function blog(): Response
    {
        //$number = random_int(0, 100);

        return $this->render('blog/index.html.twig');
    }
    /**
     * @Route("/list")
     * @return Response
     * @throws \Exception
     */
    public function list(): Response
    {
        return $this->render('blog/list.html.twig');
    }
    /**
     * @Route("/login")
     * @return Response
     * @throws \Exception
     */
    public function login(): Response
    {
        $number = random_int(0, 100);
        return $this->render('blog/login.html.twig',[
            'number' => $number
            ]);
    }
    /**
     * @Route("/about")
     * @return Response
     * @throws \Exception
     */
    public function about(): Response
    {
        return $this->render('blog/about.html.twig');
    }
}