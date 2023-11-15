<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Common\Messages;
use App\Models\Common\Slider;
use App\Models\InstituteInfo\InstituteInfo;
use App\Models\Member\Teachers;
use App\Models\Menu\Menu;
use App\Models\Menu\Sub_Menu;
use App\Models\Notice\ImportantNotice;
use App\Models\Notice\News;
use App\Models\Notice\Notice;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function index()
    {
        $institute = InstituteInfo::query()->where('id', 1)->first();
        $menus = Menu::query()->where('status', 1)->get();
        $submenu = Sub_Menu::query()->where('status', 1)->get();
        $notice = Notice::query()->where('status', 1)->get();
        $sliders = Slider::query()->where('status', 1)->get();
        $teachers = Teachers::query()->where('status',1)->get();
        $inotice = ImportantNotice::query()->where('status',1)->first();
        $message = Messages::query()->where('status',1)->get();
        $news = News::query()->where('status',1)->get();

        //dd($message);

        return view('Frontend.landpage', compact('institute','message','menus','news','inotice','sliders','submenu','notice','teachers'));
    }
}
