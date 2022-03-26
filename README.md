# Burda PHP Route

TASK COvered: This small PHP Framework covers following requirements:
* File based config that can interpret parameterized routes
* Controller is invoked along route params
* The output of BaseController is interpret by twig template engine.
* Test written UnitTest for to test a route

## Requirments:
required apachi2 server (PHP Version 7.4) and composer


## Basic setup (Optional)
If your PHP script lives in a subfolder (e.g. in our case /burda-php-router) set this BASEPATH constant. Which is being used in Route Run method inside root/index.php file. If you want to keep using the same directory name then simply skip this part.

```php
define('BASEPATH', '/burda-php-router');
Route::run(BASEPATH);
```
BASEPATH should be updated inside .htacess file as well.
Note: Enable mod_rewrite in your Apache2 settings if you didn't enabled it before.

## Install dependencies

```bash
$ composer install
```

## How to run in browser
You can run this using aparchi server as below url.
http://localhost/burda-php-router/



## Example routes
* /
* /user/([0-9]*)/edit
* /patch/route
* /user/([0-9]*)/edit
* /blog/([0-9]*)/([a-z-0-9-]*)

## Tests
* Run following command to check UnitTests.
vendor/bin/phpunit

