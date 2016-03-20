<?php

namespace StalkerBundle\Controller;

use StalkerBundle\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class ArmeController
 * @package StalkerBundle\Controller
 *
 * @Rest\Prefix("arme")
 * @Rest\NamePrefix("stalker_api_")
 * @Rest\RouteResource("Arme")
 */
class ArmeController extends Controller
{
    use \StalkerBundle\Services\ResponseGenerator;

    /**
     * @Rest\View
     * @Rest\Get("")
     * @ApiDoc(
     *  description="Récupération de la liste des armes",
     *  output="StalkerBundle\Entity\Arme",
     *  statusCodes={
     *      200="Code Retourné si aucune erreur n'est rencontrée",
     *      404="foo"
     *  }
     * )
     *
     * @return string json
     */
    public function getArmesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $serializer = $this->get('jms_serializer');
        $armes = $em->getRepository('StalkerBundle:Arme')->findAll();

        return $this->generateJsonResponse($serializer, $armes);
    }

    /**
     * @Rest\View
     * @Rest\Get("/{id}")
     * @ApiDoc(
     *  description="Récupération d'une arme via son identifiant",
     *  output="StalkerBundle\Entity\Arme",
     *  statusCodes={
     *      200="Code retourné si aucune erreur n'est rencontrée",
     *      404="Code retourné si aucune arme ne correspond à l'identifiant communiqué"
     *  }
     * )
     *
     * @return string json
     */
    public function getArmeAction(Arme $arme)
    {
        $serializer = $this->get('jms_serializer');

        return $this->generateJsonResponse($serializer, $arme);
    }
}