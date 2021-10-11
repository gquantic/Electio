<?php

/*
|--------------------------------------------------------------------------
| Контроллер товаров
|--------------------------------------------------------------------------
|
| Класс, который отвечает за отображение / сортировку товаров и действия
| над ними. Класс использует API для работы с самой базой магазина.
| Все действия с API можно посмотреть в @ApiController.
|
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class GoodsController extends Controller
{
    protected $viewGood = 0;

    public function __construct()
    {
        $this->api = (new ApiController); // Подключение API. След вид работы: $this->api->request(REQUEST, METHOD);
    }

    /*
     * Вывод информации о товаре.
     * Прямой показ на странице мы не используем - показ данных производится в модальном окне.
     * Все возвращаем в text/json формате.
     */
    public function exportGoods()
    {
        return $this->api->exportGoods();
    }

    public function goodInfo($id)
    {
        $goodInfo = $this->api->request("product/$id", 0);
//        var_dump($goodInfo);

        return view('view', ['good' => $goodInfo]);

        /**
         *  "id" => 56
            "name" => "Зимняя полицейская форма современного образца"
            "describe" => """
            Зимняя полицейская форма какого-то там размера. В съемках участвовала более 10-ти раз. Состояние — после химчистки. Видимых дефектов нет, только внутри кармана  ▶
            Огромная просьба использовать форму по назначению, то бишь в съемках. Возможность порчи реквизита обсуждается индивидуально.
            Муж.
            """
            "condition" => "Использовалось"
            "type" => "special"
            "subtype" => "special3"
            "brand" => null
            "color" => "Темно-синий"
            "detail" => "Нет"
            "size" => "54"
            "sizeLH" => null
            "design" => null
            "stuff" => "Штаны,куртка,шапка, значок и нашивки на форме со всех сторон"
            "material" => "Другое"
            "dateOne" => null
            "tarifOne" => 4700
            "dateSecond" => null
            "tarifSecond" => 5500
            "dateThird" => null
            "tarifThird" => 9500
            "mainPhoto" => "upload/VamM6WwPvcn8FzcFNjEZ3MnG4yLf7U"
            "specialComment" => "Только самовывоз и из рук в руки. Все доработки реквизита или его порча- обсуждаются индивидуально"
            "gender" => "MALE"
            "marks" => []
            "blockedByModerator" => false
            "blockedByFine" => false
         */
    }
}
