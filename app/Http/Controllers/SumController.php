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
 *          @OA\Property(
 *           property="data",
 *           type="array",
 *           @OA\Items(
 *               type="object",
 *               format="query",
 *               @OA\Property(property="id", type="integer", example=1),
 *               @OA\Property(property="name", type="string", example="Alex"),
 *               @OA\Property(property="sum", type="integer", example=13100)
 *              ),
 *          ),
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
