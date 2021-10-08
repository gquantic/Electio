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
    public function exportGood($id)
    {
        header('Content-Type: application/json');

        echo json_encode(
            [
                'content' => 123
            ]
        );
    }
}
