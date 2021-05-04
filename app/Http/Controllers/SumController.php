<?php
namespace App\Http\Controllers;

use App\Repositories\SumRepo;

/**
 * @OA\Get(
 *     path="/api/getSum",
 *     summary="Get sum of orders by one contragent",
 *     description="List of notes",
 *     tags={"Sum"},
 *     @OA\Response(
 *        response="200",
 *        description="Successful response",
 *        @OA\JsonContent(
 *          type="object",
 *          example={
 *             "data": {
 *                      "id": 1,
 *                      "name": "Hayley Reilly",
 *                      "sum": "13880",
 *              }
 *          },
 *      )
 *   ),
 *     @OA\Response(
 *        response="400",
 *        description="Response error",
 *       ),
 * )
 */
class SumController extends Controller
{

    public function sum()
    {
        $sum = SumRepo::request();

         return json_encode($sum, JSON_UNESCAPED_UNICODE);

}
}
