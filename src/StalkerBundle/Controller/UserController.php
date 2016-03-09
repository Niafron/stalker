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
     * @return string json
     * @View()
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $serializer = $this->get('jms_serializer');
        $users = $em->getRepository('StalkerBundle:User')->findAll();

        return new JsonResponse($serializer->serialize($users, 'json'), Response::HTTP_OK);
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