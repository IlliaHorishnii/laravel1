<?php


namespace App\Repositories;
use App\Models\Orders;


class OrdersRepo
{
    public static function request()
    {

        $request = Orders::join('partners', 'partners.orderId', '=', 'orders.id')
        ->where('partners.name', 'Андрей Серый')
        ->get();

        foreach($request as $req) {
            echo 'ID: '.$req['id'];
            echo "<br>";
            echo 'Name: '.$req['name'];
            echo "<br>";
            echo 'Product name: '.$req['productName'];
            echo "<br>";
            echo "<br>";
        }
    }
}
