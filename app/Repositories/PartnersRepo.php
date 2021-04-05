<?php

namespace App\Repositories;
use App\Models\Partners;


class PartnersRepo
{
    public static function request()
    {
        $sql = " SELECT *
    FROM partners_list
    WHERE `name` IN (
        SELECT `name`
        FROM partners_list
         GROUP BY `name`
        HAVING count(`name`) > 1)
        ORDER BY `name`";

        $request = Partners::wherein('name',
            partners::select('name')->groupby('name')->having(Partners::raw('count(name)'), '>', '1'))
            ->orderby('name')
            ->get();

        foreach($request as $req) {
            echo 'ID: '.$req['id'];
            echo "<br>";
            echo 'Name: '.$req['name'];
            echo "<br>";
            echo "<br>";
        }
    }
}
