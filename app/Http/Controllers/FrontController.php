<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function __construct()
    {
        $categories = DB::table('categories')->where("status", 'Active')->get();
        $setting = DB::table('settings')->first();
        if($setting){
            $setting->social  = explode(',', $setting->social);
            foreach ($setting->social as $social) {
                $icon = explode('.', $social);
                $icon = $icon[1];
                $icons[] = $icon;
            }
        }else{
            $icons = [];
        }
        view()->share([
            'categories' => $categories,
            'setting' => $setting,
            'icons' => $icons,
        ]);
    }

    public function index(){
        return view('frontend.index');
    }
}
