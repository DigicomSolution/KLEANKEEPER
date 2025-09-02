<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spiderworks\MiniWeb\Models\Page;

class BlogController extends Controller
{
    public function index(){
       $blog = Page::where('slug','blogs')->first();
       if(!$blog){abort(404);}
       $blogs = Page::where('type','blog')->where('status',1)->orderBy('blog_date','DESC')->paginate();

       if(isset($_GET['page'])){
        $blogs = "Page ". $_GET['page']." - ". $blogs->browser_title;
       }

        $categories = DB::table('services as s')
            ->join('pages as p','p.related_service_id','=','s.id')
            ->select('s.name','s.slug', DB::raw('count(*) as count'))
            ->groupBy('p.related_service_id')
            ->get();


       return view('client.blog.index',compact('blogs','blog','categories'));
    }

    public function blog_detail($slug){

        $blog = Page::where('slug',$slug)->where('type','blog')->first();
        $categories = DB::table('services as s')
            ->join('pages as p','p.related_service_id','=','s.id')
            ->select('s.name','s.slug', DB::raw('count(*) as count'))
            ->groupBy('p.related_service_id')
            ->get();
        if(empty($blog)){
            $service = Service::where('slug',$slug)->first();
            if($service){
                $blog = Page::where('slug','blogs')->first();
                $blogs = Page::where('related_service_id',$service->id)->where('type','blog')->paginate();
                $title = 'Blogs on '.$service->name;
                $blog->browser_title = $title;
                return view('client.blog.index',compact('blogs','blog','title','categories'));
            }else{
                $blog = Page::where('slug','blogs')->first();
                $blogs = Page::where('author',$slug)->where('type','blog')->paginate();
                $title = 'Blogs created by '.$slug;
                $blog->browser_title = $title;
                return view('client.blog.index',compact('blogs','blog','title','categories'));
            }
        }

        $popular_blogs = Page::where('type','blog')->orderby('id','DESC')->limit(5)->get();
        return view('client.blog.details',compact('blog','categories','popular_blogs'));
    }

    public function page_details($slug){

        $blog = Page::where('slug',$slug)->where('slug','!=','home-footer')->where('type','page')->first();
        if(!$blog){
            abort(404);
        }
        return view('client.pages.page',compact('blog'));
    }

}
