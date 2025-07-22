<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spiderworks\MiniWeb\Models\Page;

class SitemapController extends Controller
{
      public function index()
    {
        return response()->view('client.sitemaps.index')->header('Content-Type', 'text/xml');
    }
 public function blogs() {
       $items = DB::table('pages')->where('type','blog')->select('slug')->where('status', 1)->get();
        return response()->view('client.sitemaps.blogs', ['items'=>$items])->header('Content-Type', 'text/xml');
   }
 public function services() {
       $items = DB::table('services')->select('slug')->where('status', 1)->get();
        return response()->view('client.sitemaps.services', ['items'=>$items])->header('Content-Type', 'text/xml');
   }
  public function static_pages() {
       $items = DB::table('frontend_pages')->select('slug')->where('status', 1)->get();
       $items_2 = DB::table('pages')->where('type','!=','blog')->select('slug')->where('status', 1)->get();

       
                        
        return response()->view('client.sitemaps.static_pages', ['items'=>$items , 'items_2'=>$items_2])->header('Content-Type', 'text/xml');
   }

    


}
