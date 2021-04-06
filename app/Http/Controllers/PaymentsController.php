<?php

namespace App\Http\Controllers;
use App\Repositories\PaymentsRepo;




class PaymentsController extends Controller
{

    public function payments() {
       $payments = PaymentsRepo::request();

        return json_encode($payments, JSON_UNESCAPED_UNICODE);

    }
}
