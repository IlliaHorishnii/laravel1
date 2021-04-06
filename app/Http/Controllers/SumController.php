<?php

namespace App\Http\Controllers;
use App\Repositories\SumRepo;




class SumController extends Controller
{

    public function sum() {
    $sum = SumRepo::request();

    return json_encode($sum, JSON_UNESCAPED_UNICODE);

}
}
