<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findPublishedArticles();

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }
} 






//namespace App\Controller;
//
//use App\Repository\ArticleRepository;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Attribute\Route;
//
//class ArticleController extends AbstractController
//{
//    #[Route('/articles', name: 'article_index')]
//    public function index(ArticleRepository $articleRepository): Response
//    {
//        $articles = $articleRepository->findPublishedArticles();
//
//        return $this->render('article/index.html.twig', [
//            'articles' => $articles,
//        ]);
//    }
//}
