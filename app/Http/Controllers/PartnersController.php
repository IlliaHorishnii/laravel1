<?php

namespace App\Http\Controllers;
use App\Repositories\PartnersRepo;




class PartnersController extends Controller
{

    public function partners() {
      $partners =  PartnersRepo::request();
      return json_encode($partners, JSON_UNESCAPED_UNICODE);
    }
}
