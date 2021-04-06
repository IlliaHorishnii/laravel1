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

        return $request;
    }
}
