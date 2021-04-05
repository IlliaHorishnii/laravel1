<?php

namespace App\Http\Controllers;
use App\Repositories\PaymentsRepo;




class PaymentsController extends Controller
{

    public function payments() {
        PaymentsRepo::request();


    }
}
