<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderDetailsController extends AbstractController
{
    /**
     * @Route("/order/details", name="order_details")
     */
    public function index(): Response
    {
        return $this->render('order_details/index.html.twig', [
            'controller_name' => 'OrderDetailsController',
        ]);
    }
}
