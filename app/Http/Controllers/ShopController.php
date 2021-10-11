<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GoodsController;

class ShopController extends Controller
{
    public function __construct()
    {
        /**
         * Подключение Контроллер товаров.
         * След вид работы: $this->goods->request(REQUEST, METHOD);
         */
        $this->goods = (new GoodsController);
    }

    public function categorySelect($category)
    {
        return view('catalog', ['category' => $category]);
    }

    public function catalogView()
    {
        $goods = $this->goods->exportGoods();
        return view('catalog', ['goods' => $goods]);
    }
}
