<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Security("is_granted('ROLE_USER')")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello", name="homepage")
     * @Method("POST")
     */
    public function indexAction(Request $request)
    {
        $data = ['key' => 'value'];
        return $this->createApiResponse($data, 201);
    }
}