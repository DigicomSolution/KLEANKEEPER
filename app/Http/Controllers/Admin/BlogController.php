<?php

namespace App\Http\Controllers\Admin;


use App\Models\Service;
use Spiderworks\MiniWeb\Controllers\BaseController;
use Illuminate\Http\Request as HttpRequest;
use Spiderworks\MiniWeb\Traits\ResourceTrait;

use Spiderworks\MiniWeb\Models\Page;
use View,Redirect, DB;

class BlogController extends BaseController
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Page;
        $this->route = 'admin.blogs';
        $this->views = 'admin.blogs';

        $this->resourceConstruct();

    }
    protected function getCollection() {
        return $this->model->select('id', 'slug', 'name', 'browser_title', 'meta_keywords', 'status')->where('type','blog');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->editColumn('status', function($obj) use($route) {
                if($obj->status == 1)
                {
                    return '<a href="' . route($route.'.change-status', [encrypt($obj->id)]).'" class="btn btn-success btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to disable this page?"><i class="fa fa-check-circle"></i></a>';
                }
                else{
                    return '<a href="' . route($route.'.change-status', [encrypt($obj->id)]) . '" class="btn btn-danger btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to enable this page?"><i class="fa fa-times-circle"></i></a>';
                }
            })
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    public function create()
    {
        $services = Service::where('status',1)->get();
        return view($this->views . '.form',compact('services'))->with('obj', $this->model);
    }

    public function edit($id) {
        $services = Service::where('status',1)->get();
        $id = decrypt($id);
        if($obj = $this->model->find($id)){
            return view($this->views . '.form',compact('services'))->with('obj', $obj);
        } else {
            return $this->redirect('notfound');
        }
    }




}
