<?php
return [
  [
    'expression' => '/',
    'method' => 'get',
    'function' => function (){
      return App\Burda\Controllers\BaseController::index('rahat hameed','software engineeering');
    }
  ],
  [
    'expression' => '/get/route',
    'method' => 'get',
    'function' => function (){
      return App\Burda\Controllers\BaseController::printResponse('This is valid get method route.');
    }
  ],
  [
    'expression' => '/patch/route',
    'method' => 'patch',
    'function' => function (){
      return App\Burda\Controllers\BaseController::printResponse('This is valid patch method route.');
    }
  ],  
  [
    'expression' => '/user/([0-9]*)/edit',
    'method' => 'get',
    'function' => function($var1) {
        return App\Burda\Controllers\BaseController::singleVar($var1);
    }
  ],
  [
    'expression' => '/blog/([0-9]*)/([a-z-0-9-]*)',
    'method' => 'get',
    'function' => function($var1,$var2) {
        return App\Burda\Controllers\BaseController::printBlogParams($var1,$var2);
    }
  ]  
];