<?php

namespace Tests\Feature;

use App\Http\Controllers\RequestsController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RequestsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $obj = new RequestsController();
        $response = $obj->payments();
        $keys = array_keys($response);

        $this->assertEquals($keys, ['id', 'productName', 'paymentMethod', 'status', 'orderTime']);

        var_dump($response);
    }
}
