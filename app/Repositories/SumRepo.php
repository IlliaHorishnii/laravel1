<?php

namespace App\Repositories;
use App\Models\Payments;


class SumRepo
{
    public static function request() {


        $request = Payments::select('partners.name','payments.sum as total')
        ->join('partners', 'partners.orderId', '=', 'payments.partnerId')
           ->groupby('partners.name')
            ->get();

        return $request;

    }


}
