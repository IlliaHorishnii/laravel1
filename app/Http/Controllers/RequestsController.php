<?php
namespace App\Http\Controllers;

use App\Repositories\SumRepo;
use App\Repositories\PaymentsRepo;
use App\Repositories\OrdersRepo;
use App\Repositories\PartnersRepo;

class RequestsController extends Controller
{

    public function payments()
    {
        $test = ['id' => '1', 'name' => 'name', 'method' => 'cash', 'status' => 'paid', 'time' => '2021-05-13 17:34:21'];

        $payments = PaymentsRepo::request($test);

        $data = [
            'id' => $payments->id,
            'productName'=> $payments->productName,
            'paymentMethod' => $payments->paymentMethod,
            'status' => $payments->status,
            'orderTime' => $payments->orderTime,
        ];

        return $data;
    }

    public function orders()
    {
        $orders = OrdersRepo::request();

        $data = [
            'id' => $orders->id,
            'productName'=> $orders->productName,
            'paymentMethod' => $orders->comment,
            'status' => $orders->status,
            'orderTime' => $orders->orderTime,
        ];

        return $data;
    }

    public function partners()
    {
        $partners =  PartnersRepo::request();

        $data = [
            'id' => $partners->id,
            'name'=> $partners->name,
            'orderId' => $partners->orderId,
            'phone' => $partners->phone
        ];

        return $data;
    }


}
