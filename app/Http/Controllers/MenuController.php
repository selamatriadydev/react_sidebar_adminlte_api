<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    //
    public function index()
    {
        $menu = new Menu;
        $menuList = $menu->tree();
        return response()->json($menuList);
    }
}
