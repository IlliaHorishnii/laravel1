<?php

namespace App\Repositories;
use App\Models\Orders;


class PaymentsRepo
{
    public static function request()
    {

        $request = Orders::where('status', 'paid')->get();

        foreach($request as $req) {
            echo 'ID: '.$req['id'];
            echo "<br>";
            echo 'Product name: '.$req['productName'];
            echo "<br>";
            echo 'Status: '.$req['status'];
            echo "<br>";
            echo "<br>";
        }
    }
}
