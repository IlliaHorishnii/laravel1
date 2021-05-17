<?php

namespace App\Repositories;
use App\Models\Orders;


class PaymentsRepo
{
    public static function request($test = null)
    {
        $request = Orders::where('status', 'paid')->get()->first();

        if ($test) {
            $request->id = $test['id'];
            $request->productName = $test['name'];
            $request->paymentMethod = $test['method'];
            $request->status = $test['status'];
            $request->orderTime = $test['time'];
        }

        return $request;
    }
}
