<?php
namespace App\Http\Controllers;

use App\Services\Adapter\Adapter;
use App\Services\Adapter\JsonAdaptee;

class XmlController extends Controller
{

    public function jsonToXml()
    {
        $array = [
            2,
            3,
            'test',
            'for',
            'json',
            'to',
            'xml',
            'decoder',
            'process' => 'success'
        ];
        $obj = new JsonAdaptee($array);
        $json = $obj->jsonConverter();

        $obj = new Adapter($json);
         $obj->xmlOutput($obj->xmlResult());
    }
}
