<?php

namespace App\Repositories;
use App\Models\Orders;


class PaymentsRepo
{
    public static function request()
    {

        $request = Orders::where('status', 'paid')->get()->first();

        return $request;
    }
}
