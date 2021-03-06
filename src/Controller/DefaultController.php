<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @throws \Exeption
 */

class DefaultController extends AbstractController
{
    
    public function index(EntityManagerInterface $em, Request $request): Response
    {
       
        $cr = $em->getRepository('App:Category');
        $categories = $cr->findAll();

        return $this->render('default/index.html.twig', [
            'categories' => $categories,       
        ]);

    }

    public function category(int $id, EntityManagerInterface $em)
    {
        $category = $em->getRepository('App:Category')->find($id);
        $products = $em->getRepository('App:Product')->findAll($id);

        return $this->render('default/category.html.twig', [
            'category' => $category,  
            'products' => $products     
        ]);

    }

    public function product(int $id, EntityManagerInterface $em)
    {
        $product = $em->getRepository('App:Product')->find($id);

        return $this->render('default/product.html.twig', [
            'product' => $product,       
        ]);

    }
}