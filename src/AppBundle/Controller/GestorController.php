<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GestorController extends Controller
{
    /**
     * @return Response
     * @Route("/prueba1")
     */
    public function pruebaAction()
    {
        return $this->render('cliente/cliente_listar.html.twig');
    }
}
