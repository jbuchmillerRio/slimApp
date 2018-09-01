<?php

namespace Demo\Controller;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class ExampleController
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }


    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function getDefault(Request $request, Response $response, array $args = null) :Response
    {
        $response->getBody()->write("boom boom pows!");//, var_export($this->container->get('pdo')));
        return $response;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function update(Request $request, Response $response, array $args = null) :Response
    {
        $response->getBody()->write("boom basdfoom pows!", var_export($this->container->get('pdo')));
        return $response;
    }

}
