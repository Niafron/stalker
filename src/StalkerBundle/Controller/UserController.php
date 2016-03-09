<?php

namespace StalkerBundle\Controller;

use StalkerBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\View;

class UserController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('StalkerBundle:User')->findAll();
        var_dump($users);
        die ('->end');
        //return new Response('toto', 200);
        //return new JsonResponse(['users' => json_encode($users)], 200);
        return new JsonResponse($users, 200);
        $response = new JsonResponse();
        $response->setData($users);
        return $response;
    }

    /**
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="StalkerBundle:User")
     */
    public function getUserAction(User $user)
    {
        $response = new JsonResponse();
        $response->setData(['user' => $user]);
        return $response;
    }
}