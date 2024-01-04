<?php

namespace bng\System;
use bng\Controllers\Main;
use Exception;

class Router 
{
  public static function dispatch()
  {
    //MAIN ROUTE VALUES
    $httpverb = $_SERVER['REQUEST_METHOD'];
    $controller = "main";
    $method = "index";

    //CHECK URI PARAMETERS
    if(isset($_GET['ct'])) {
      $controller = $_GET['ct'];
    }
    if(isset($_GET['mt'])) {
      $method = $_GET['mt'];
    }

    //METHOD PARAMETERS
    $parameters = $_GET;

    //REMOVE CONTROLLER FROM PARAMETERS
    if(key_exists("ct", $parameters)) {
      unset($parameters['ct']);
    }

    //REMOVE METHOD FROM PARAMETERS
    if(key_exists("mt", $parameters)) {
      unset($parameters['mt']);
    }

    //TRIES TO INSTANCIATE THE CONTROLLER AND EXECUTE THE METHOD
    try {
      $class = "bng\Controllers\\$controller";
      $controller = new $class();
      $controller->$method(...$parameters);
  
    } catch (Exception $err) {
      die($err->getMessage());
    }

  }
}