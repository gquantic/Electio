<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function categorySelect($category)
    {
        return view('catalog', ['category' => $category]);
    }
}
