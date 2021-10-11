<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    private $api = 0;
    private $password = 0;

    /**
     * @connect to API
     * @request - request
     * @method - method to request
     */
    private function connect($request, $method)
    {
        $ch = curl_init("http://78.24.223.31:8080/api/$request");
        curl_setopt($ch, CURLOPT_POST, $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response, true);

        return $response; // Выведет код страницы
    }

    public function request($request, $method)
    {
        return $this->connect($request, $method);
    }

    public function exportGoods()
    {
        $goods = $this->request("catalog/catalog", 0);
        return $goods['content'];

        /**
         * "id" => 58
            "name" => "Балалайка"
            "describe" => "В аренду сдается балалайка в чехле. Играть на ней не получится, но бренчать можно. Несколько раз была на съемках"
            "condition" => "Использовалось"
            "type" => "requisite"
            "subtype" => "requisite3"
            "brand" => null
            "color" => "Коричневый"
            "detail" => "Струны"
            "size" => "30x15"
            "sizeLH" => null
            "design" => null
            "stuff" => "Балалайка и чехол"
            "material" => "Другое"
            "dateOne" => null
            "tarifOne" => 400
            "dateSecond" => null
            "tarifSecond" => 800
            "dateThird" => null
            "tarifThird" => 1500
            "mainPhoto" => "upload/SeJmFNWnKJpzpuk180gCvzCbUkFjwE"
            "specialComment" => "Только самовывоз и из рук в руки. Все доработки реквизита или его порча- обсуждаются индивидуально"
            "gender" => null
            "marks" => []
            "blockedByModerator" => false
            "blockedByFine" => false
         */
    }
}
