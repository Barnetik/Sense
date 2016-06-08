<?php
/**
 * Created by Asier Marqués <asiermarques@gmail.com>
 * Date: 8/6/16
 * Time: 14:13
 */

namespace Simettric\Sense\Router;


use Collections\Collection;

class RouteContainer extends Collection{

    function __construct(){
        parent::__construct("Simettric\\Sense\\Router\\RouteInterface");
    }

    function get($name){
        return $this->find(function($route) use ($name){
                return $route->getName() == $name;
        });
    }

} 