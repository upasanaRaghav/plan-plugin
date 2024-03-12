<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Plan',
    ['path' => '/plan'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
        $routes->connect('/', ['controller' => 'Plan', 'action' => 'index']);

        $routes->connect('/index', ['controller' => 'Ptable', 'action' => 'index']);
        $routes->connect('/allitem', ['controller' => 'Pitem', 'action' => 'index']);


        $routes->connect('/create', ['controller' => 'Plan', 'action' => 'create']);
        $routes->connect('/createp', ['controller' => 'Ptable', 'action' => 'create']);
        $routes->connect('/createitem', ['controller' => 'Pitem', 'action' => 'create']);

        $routes->connect('/edit/:id', ['controller' => 'Plan', 'action' => 'edit'])
            ->setPass(['id'])
            ->setPatterns(['id' => '\d+']);

      $routes->connect('/editp/:id', ['controller' => 'Ptable', 'action' => 'edit'])
            ->setPass(['id'])
            ->setPatterns(['id' => '\d+']);
           
            $routes->connect('/edititem/:id', ['controller' => 'Pitem', 'action' => 'edit'])
            ->setPass(['id'])
            ->setPatterns(['id' => '\d+']);

      
        $routes->connect('/delete/:id', ['controller' => 'Plan', 'action' => 'delete'])
            ->setPass(['id'])
            ->setPatterns(['id' => '\d+'])
            ->setMethods(['POST']);
           
            $routes->connect('/deletep/:id', ['controller' => 'Ptable', 'action' => 'delete'])
            ->setPass(['id'])
            ->setPatterns(['id' => '\d+'])
            ->setMethods(['POST']);

            $routes->connect('/deleteitem/:id', ['controller' => 'Pitem', 'action' => 'delete'])
            ->setPass(['id'])
            ->setPatterns(['id' => '\d+'])
            ->setMethods(['POST']);
    }
);
