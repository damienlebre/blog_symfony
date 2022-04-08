<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/list-des-articles", name="blog_list")
     */
    public function list(ArticleRepository $repo): Response
    {
        //$repo = new ArticleRepository(); //remplplacer par injection de dépeondance
        $articles=$repo->findAll();
        return $this->render('blog/list.html.twig', [
            'articles'=> $articles
        ]);
    }
}
