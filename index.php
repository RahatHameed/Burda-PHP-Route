<?php
require_once __DIR__.'/vendor/autoload.php';
// Run the Router with the given Basepath
define('BASEPATH', '/burda-php-router');

// prepare dynamic routes
use App\Burda\Services\Route;
use App\Burda\Controllers\BaseController;
$routes = require_once __DIR__.'/config/routes.php';

foreach($routes as $route){

    Route::add($route['expression'], $route['function'],$route['method']);
}


// ------- prepare staic routes -------//
// Add a 404 not found route
Route::pathNotFound(function($path) {
  
    BaseController::pathNotFound($path);
    
  });
  
  // Add a 405 method not allowed route
  Route::methodNotAllowed(function($path, $method) {
      
      BaseController::methodNotAllowed($path,$method);
      
});

Route::Run(BASEPATH);