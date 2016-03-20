<?php

namespace StalkerBundle\Services;

use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializerInterface;

trait ResponseGenerator
{
    /**
     * @param SerializerInterface $serializer
     * @param string $data
     * @param int $httpCode
     * @return Response
     */
    function generateJsonResponse (SerializerInterface $serializer, $data, $httpCode = Response::HTTP_OK)
    {
        return new Response($serializer->serialize($data, 'json'), $httpCode, ['Accept: application/json; version=2']);
    }
}