<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spiderworks\MiniWeb\Controllers\BaseController;
use DB, URL;
use Spiderworks\MiniWeb\Models\MediaLibrary as Media;
use Illuminate\Support\Facades\Auth;

class PluginController extends BaseController
{
    public function select2_clients(Request $r){
        $items = DB::table('clients')->where('name', 'like', $r->q.'%')->orderBy('name')
            ->get();
        $json = [];
        foreach($items as $c){
            $json[] = ['id'=>$c->id, 'text'=>$c->name];
        }
        return \Response::json($json);
    }

    public function select2_departments(Request $r)
    {
        $items = DB::table('departments')->where('name', 'like', $r->q.'%')->orderBy('name')
            ->get();
        $json = [];
        foreach($items as $c){
            $json[] = ['id'=>$c->id, 'text'=>$c->name];
        }
        return \Response::json($json);
    }

    public function select2_listings(Request $r)
    {
        $items = DB::table('listings')->where('name', 'like', $r->q.'%')->orderBy('name')
            ->get();
        $json = [];
        foreach($items as $c){
            $json[] = ['id'=>$c->id, 'text'=>$c->name];
        }
        return \Response::json($json);
    }

    public function select2_team(Request $r)
    {
        $items = DB::table('team')->where('name', 'like', $r->q.'%')->orderBy('name')
            ->get();
        $json = [];
        foreach($items as $c){
            $json[] = ['id'=>$c->id, 'text'=>$c->name];
        }
        return \Response::json($json);
    }

    public function select2_services(Request $r)
    {
        $items = DB::table('services')->where('name', 'like', $r->q.'%')->orderBy('name')
            ->get();
        $json = [];
        foreach($items as $c){
            $json[] = ['id'=>$c->id, 'text'=>$c->name];
        }
        return \Response::json($json);
    }

    public function select2_widgets(Request $r)
    {
        $items = DB::table('widgets')->where('name', 'like', $r->q.'%')->orderBy('name')
            ->get();
        $json = [];
        foreach($items as $c){
            $json[] = ['id'=>$c->id, 'text'=>$c->name];
        }
        return \Response::json($json);
    }

    public function unique_user(Request $r)
    {
         $id = $r->id;
         $email = $r->email;
         
         $where = "email='".$email."'";
         if($id)
            $where .= " AND id != ".decrypt($id);
         $user = DB::table('users')
                    ->whereRaw($where)
                    ->get();
         
         if (count($user)>0) {  
             echo "false";
         } else {  
             echo "true";
         }
    }

    public function unique_slug(Request $r)
    {
         $id = $r->id;
         $slug = $r->slug;
         $table = $r->table;
         
         $where = "slug='".$slug."'";
         if($id)
            $where .= " AND id != ".decrypt($id);
         $result = DB::table($table)
                    ->whereRaw($where)
                    ->get();
         
         if (count($result)>0) {  
             echo "false";
         } else {  
             echo "true";
         }
    }
    
}
