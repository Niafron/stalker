<?php

namespace StalkerBundle\Controller;

use StalkerBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\View;

use JMS\Serializer\SerializerInterface;

use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class UserController
 * @package StalkerBundle\Controller
 *
 * @Rest\Prefix("user")
 * @Rest\NamePrefix("stalker_api_")
 * @Rest\RouteResource("User")
 */
class UserController extends Controller
{
    /**
     * @Rest\View
     * @Rest\Get("")
     * @ApiDoc(
     *  description="Récupération de la liste des utilisateurs",
     *  output="StalkerBundle\Entity\User",
     *  statusCodes={
     *      200="Code Retourné si aucune erreur n'est rencontrée",
     *      404="foo"
     *  }
     * )
     *
     * @return string json
     */
    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $serializer = $this->get('jms_serializer');
        $users = $em->getRepository('StalkerBundle:User')->findAll();

        return $this->responseGenerator($serializer, $users, Response::HTTP_OK);
    }

    /**
     * @Rest\View
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *  description="Récupération d'un utilisateur via son identifiant",
     *  output="StalkerBundle\Entity\User",
     *  statusCodes={
     *      200="Code retourné si aucune erreur n'est rencontrée",
     *      404="Code retourné si aucun utilisateur ne correspond à l'identifiant communiqué"
     *  }
     * )
     *
     * @return string json
     */
    public function getUserAction(User $user)
    {
        $serializer = $this->get('jms_serializer');
        return $this->responseGenerator($serializer, $user, Response::HTTP_OK);
    }

    /**
     * @param SerializerInterface $serializer
     * @param string $data
     * @param string $httpCode
     * @return Response
     */
    private function responseGenerator (SerializerInterface $serializer, $data, $httpCode)
    {
        return new Response($serializer->serialize($data, 'json'), $httpCode, ['Accept: application/json; version=2']);
    }
}