<?php

namespace App\Http\Controllers;
use App\Repositories\SumRepo;




class SumController extends Controller
{

    public function sum() {
    SumRepo::request();


}
}
