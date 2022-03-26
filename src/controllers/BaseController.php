<?php
namespace App\Burda\Controllers;

use App\Burda\Services\Template;

class BaseController 
{
	
    public static function index($name,$occupation)
    {
		Template::render('index.html.twig', ['name' => $name, 'occupation' => $occupation]);
    }	
	
    public static function printResponse($var1)
    {
			
		if(empty($var1)){
			$var1 = 'Bad Request';
		}		
		Template::render('print.html.twig', ['var1' => $var1]);
		
    }

    public static function singleVar($var1)
    {
			
		return $var1;
		
    }	


	public static function printBlogParams($var1,$var2)
    {
		
		Template::render('blog.html.twig', ['var1' => $var1, 'var2' => $var2]);	
		
    }	
		

	public static function pathNotFound($path)
    {
			
	  header('HTTP/1.0 404 Not Found');
	  
	  echo 'Error 404 :-(<br>';
	  echo 'The requested path "'.$path.'" was not found!';
		
    }	
	
	public static function methodNotAllowed($path,$method)
    {
			
	  header('HTTP/1.0 405 Method Not Allowed');
	  
	  echo 'Error 405 :-(<br>';
	  echo 'The requested path "'.$path.'" exists. But the request method "'.$method.'" is not allowed on this path!';
		
    }	
	
}