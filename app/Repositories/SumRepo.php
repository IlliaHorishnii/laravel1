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

        foreach($request as $req) {
            echo 'ID: '.$req['id'];
            echo "<br>";
            echo 'Name: '.$req['Name'];
            echo "<br>";
            echo 'Total: '.$req['total'];
            echo "<br>";
            echo "<br>";
        }

    }


}
