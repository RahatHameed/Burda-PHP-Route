<?php
namespace App\Burda\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_route_response()
    {

        $data = file_get_contents("http://localhost/burda-php-router/user/1221251/edit");
        $this->assertNotNull($data);
    }
}
