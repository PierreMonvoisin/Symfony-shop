<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DrinksSoda;
use App\Entity\FoodsSnack;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/shop", name="shop")
     */
    public function shop(){
        $drinksRepo = $this->getDoctrine()->getRepository(DrinksSoda::class);
        $drinksSoda = $drinksRepo->findAll();

        $foodsRepo = $this->getDoctrine()->getRepository(FoodsSnack::class);
        $foodsSnack = $foodsRepo->findAll();
        return $this->render('main/shop.html.twig', [
            'drinksSoda' => $drinksSoda,
            'foodsSnack' => $foodsSnack
        ]);
    }

    /**
     * @Route("/shop/{name}_{id}", name="article")
     */
    public function showArticle($name, $id){
        $articleRepo = $this->getDoctrine()->getRepository("App\Entity\\" . $name);
        $article = $articleRepo->find($id);
        return $this->render('main/articleDisplay.html.twig', [
            'article' => $article
        ]);
    }
}
