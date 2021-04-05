<?php

namespace App\Http\Controllers;
use App\Repositories\PartnersRepo;




class PartnersController extends Controller
{

    public function partners() {
        PartnersRepo::request();


    }
}
