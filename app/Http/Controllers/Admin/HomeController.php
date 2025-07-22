<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Key;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('admin.pages.home');
    }

    public function blogs(){
        return view('admin.pages.blogs');
    }

    public function app(){
        return view('admin.pages.app_promo');
    }
    
    public function about(){
        return view('admin.pages.about');
    }

    public function brands(){
        return view('admin.pages.brands');
    }

    public function about_us(){
        return view('admin.pages.about_us');
    }

    public function contact_us(){
        return view('admin.pages.contact');
    }

    public function settings(){
        return view('admin.pages.settings');
    }

    public function service(){
        return view('admin.pages.service_index');
    }

    public function seo(){
        return view('admin.pages.seo');
    }
    
    public function partner(){
        return view('admin.pages.partner');
    }

    public function hdiwork(){
        return view('admin.pages.hdiwork');
    }

    public function keys_save(Request $request){
        foreach($request->all() as $key => $value) {

                $this->setKey($key,$value,'text');

        }
        return redirect()->back();
    }

    public function key_remove(Request $request){
        $key = Key::where('code',$request->key)->first();
        if($key){
            $key->delete();
        }
    }
}
