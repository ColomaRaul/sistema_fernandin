<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CustomerController
 * @package AppBundle\Controller
 */
class CustomerController extends Controller
{
    /**
     * @return Response
     * @Route("/customer_list", name="customer_list")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $customers = $em->getRepository(Customer::class)->findAll();

        return $this->render('customer/customer_list.html.twig', array(
            'customers' => $customers,
        ));
    }
}
