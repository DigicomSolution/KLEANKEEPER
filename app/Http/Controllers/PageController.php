<?php

namespace App\Http\Controllers;

use App\Models\RelatedServices;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spiderworks\MiniWeb\Models\Page;
use Spiderworks\MiniWeb\Models\MenuItem;

class PageController extends Controller
{

    public function company(){
        return view('client.pages.company');
    }

    public function contact(){
        return view('client.pages.contact');
    }

    public function commercial_cleaning(){
       /* $service = Service::where('slug','commercial-cleaning')->first();
        if(!$service){
            abort(404);
        }

        $offers = Slider::where('code', 'commercial-cleaning-offer')->first();

        if(count($offers->photos) == 0){
            $offers = Slider::where('code', 'commercial-cleaning-offer')->first();
        }

        $brands = Slider::where('code','brands')->first();
        return view('client.pages.commercial_cleaning',compact('service','brands','offers'));
        */
        //new chage shift home to domesctic service

        $slider = Slider::where('code', 'home')->first();
        $home_footer = Page::where('slug', 'home-footer')->first();
     
        $parent_services = Service::where('status',1)
                                ->where('is_show_home',1)
                                ->groupBy('name')
                                ->get();

        $featured_services = Service::where('status',1)
                                ->where('is_featured',1)
                                ->groupBy('name')
                                ->get();

        $offers = Slider::where('code', 'home-offer')->first();

        // return view('client.pages.home',compact('slider','parent_services','featured_services','offers','home_footer'));
         return view('client.pages.home_new',compact('slider','parent_services','featured_services','offers','home_footer'));

    }

    public function commercial_cleaning_child($slug){
        $service = Service::where('slug',$slug)->first();
        if(!$service){
            abort(404);
        }

        $check = RelatedServices::where('related_service_id',$service->id)->first();
        if(!$check){
            abort(404);
        }
        if($check->parent_service->slug != 'commercial-cleaning'){
            abort(404);
        }
 
         $offers = Slider::where('code', 'commercial-cleaning-offer')->first();

        if(count($offers->photos) == 0){
            $offers = Slider::where('code', 'commercial-cleaning-offer')->first();
        }

        $brands = Slider::where('code','brands')->first();
        return view('client.pages.commercial_cleaning',compact('service','brands','offers'));
    }

    public function services(){
        $slider = Slider::where('code', 'services')->first();
        $page = Page::where('slug','services')->first();

        $parent_services = Service::where('is_show_in_main_service',1)
            ->where('status',1)
            ->groupBy('name')
            ->get();
            
        return view('client.pages.service_all',compact('slider','parent_services','page'));
    }


    public function service_detail($slug){

        $service = Service::where('slug',$slug)->first();
        if(!$service){
            abort(404);
        }

        $check = RelatedServices::where('related_service_id',$service->id)->first();
        if($check){
            if(!empty($check->parent_service)){
                
            if($check->parent_service->slug == 'commercial-cleaning'){
                return redirect('service/commercial-cleaning/'.$service->slug);
            }  
            }  
        }
        


        $childs = RelatedServices::select('related_service_id')->get();
        $data = [];
        foreach ($childs as $obj){
            array_push($data,$obj->related_service_id);
        }

        $parent_service = Service::whereNotIn('id',$data)
            ->where('slug',$slug)
            ->first();

        $view = 'client.pages.service';
        if(!$parent_service){
            $parent_service = Service::where('slug',$slug)
                ->first();
            $view = 'client.pages.service';

        }

        if(empty($parent_service)){
            abort(404);
        }else{
            $service = $parent_service;
        }

        $parent = RelatedServices::where('related_service_id',$service->id)->first();
        if($parent){
            $parent = Service::find($parent->service_id);
        }

        $slider = Slider::where('code',$service->slug)->first();

        $offers = Slider::where('code', $service->slug.'-offer')->first();

        return view($view,compact('service','slider','parent','offers'));
    }


    public function home(){

      /*  $slider = Slider::where('code', 'home')->first();
        $home_footer = Page::where('slug', 'home-footer')->first();
     
        $parent_services = Service::where('status',1)
                                ->where('is_show_home',1)
                                ->groupBy('name')
                                ->get();

        $featured_services = Service::where('status',1)
                                ->where('is_featured',1)
                                ->groupBy('name')
                                ->get();

        $offers = Slider::where('code', 'home-offer')->first();

        //return view('client.pages.home',compact('slider','parent_services','featured_services','offers','home_footer'));
         return view('client.pages.home_new',compact('slider','parent_services','featured_services','offers','home_footer'));
        */

         $service = Service::where('slug','commercial-cleaning')->first();
        if(!$service){
            abort(404);
        }

        $offers = Slider::where('code', 'commercial-cleaning-offer')->first();

        if(count($offers->photos) == 0){
            $offers = Slider::where('code', 'commercial-cleaning-offer')->first();
        }

        $brands = Slider::where('code','brands')->first();
        $service->browser_title = "Home - " . explode("-", $service->browser_title)[0];
        return view('client.pages.commercial_cleaning',compact('service','brands','offers'));
    }


    public function home_new(){

        $slider = Slider::where('code', 'home')->first();
        $home_footer = Page::where('slug', 'home-footer')->first();
     
        $parent_services = Service::where('status',1)
                                ->where('is_show_home',1)
                                ->groupBy('name')
                                ->get();

        $featured_services = Service::where('status',1)
                                ->where('is_featured',1)
                                ->groupBy('name')
                                ->get();

        $offers = Slider::where('code', 'home-offer')->first();

        return view('client.pages.home_new',compact('slider','parent_services','featured_services','offers','home_footer'));
    }

    public function about(){
        $team_mates = Team::all();
        return view('client.pages.about',compact('team_mates'));
    }

    public function partner(){
        
         //picking services with no childs
        $childs = RelatedServices::select('related_service_id')->get();
        $data = [];
        foreach ($childs as $obj){
            array_push($data,$obj->related_service_id);
        }

  
            $parent_services = Service::where('status',1)
                                ->where('is_featured',1)
                                ->groupBy('name')
                                ->get();

        return view('client.pages.partner',compact('parent_services'));
    }

    public function pricing(){
        return view('client.pages.pricing');
    }

}
