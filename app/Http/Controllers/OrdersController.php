<?php

namespace App\Http\Controllers;
use App\Repositories\OrdersRepo;




class OrdersController extends Controller
{

    public function orders() {
       OrdersRepo::request();


    }
}
