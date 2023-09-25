<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Common\Slider;
use App\Models\InstituteInfo\InstituteInfo;
use App\Models\Menu\Menu;
use App\Models\Menu\Sub_Menu;
use App\Models\Notice\Notice;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index()
    {
        $institute = InstituteInfo::query()->where('id', 1)->first();
        $menu = Menu::query()->where('status', 1)->get();
        $submenu = Sub_Menu::query()->where('status', 1)->get();
        $notice = Notice::query()->where('status', 1)->get();
        $slider = Slider::query()->where('status', 1)->get();

        return view('Frontend.landpage', compact('institute','menu','slider','submenu','notice'));
    }
}
