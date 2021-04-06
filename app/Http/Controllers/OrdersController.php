<?php

namespace App\Http\Controllers;
use App\Repositories\OrdersRepo;




class OrdersController extends Controller
{

    public function orders() {
      $orders = OrdersRepo::request();

        return json_encode($orders, JSON_UNESCAPED_UNICODE);

    }
}
