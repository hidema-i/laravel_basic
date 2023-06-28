<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        //1対多のリレーション
        $shops = Area::find(1)->shops;
        //親 <- 子
        $area = Shop::find(2)->area;
        //多対多のリレーション
        $routes = Shop::find(1)->routes()->get();

        dd($shops, $area, $routes);
    }
}
