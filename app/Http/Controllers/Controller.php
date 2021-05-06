<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info (
 *     version="1.0.0",
 *     title="Orders API",
 *     description="API requests",
 *     @OA\Contact (
 *     email="company@gmail.com"
 *      ),
 *     @OA\License (
 *     name="Apache 2.0",
 *     url="htttp://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 * Class Controller
 * @package App\Http\Controllers
 */

class Controller extends BaseController
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
