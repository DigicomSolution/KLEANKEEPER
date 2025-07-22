<?php 

namespace App\Http\Controllers\Admin;

use Spiderworks\MiniWeb\Controllers\BaseController;
use Spiderworks\MiniWeb\Traits\ResourceTrait;
use View, Redirect, DB;
use App\Models\Listing;
use App\Models\ListingItem;
use Helper;
use Illuminate\Http\Request;

class ListingController extends BaseController
{
    use ResourceTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->model = new Listing;

        $this->route = 'admin.listings';
        $this->views = 'admin.listings';
        $this->url = "admin/listings/";

        $this->resourceConstruct();

    }


    protected function getCollection() {
        return $this->model->select('id','name', 'status');
        
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->editColumn('status', function($obj) use($route) { 
                if($obj->status == 1)
                {
                    return '<a href="' . route($route.'.change-status', [encrypt($obj->id)]).'" class="btn btn-success btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to disable this record?"><i class="fa fa-check-circle"></i></a>'; 
                }
                else{
                    return '<a href="' . route($route.'.change-status', [encrypt($obj->id)]) . '" class="btn btn-danger btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to enable this record?"><i class="fa fa-times-circle"></i></a>';
                }
            })
            ->editColumn('updated_at', function($obj) { return date('m/d/Y H:i:s', strtotime($obj->updated_at)); })
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    public function store(Request $request)
    {
      
        
        $this->model->validate();
        $data = request()->all();
        $this->model->fill($data);
        if($this->model->save())
        {
            if(isset($data['listing']))
                foreach ($data['listing'] as $key => $value) {
                    if($value['title'] !='' || $value['description'] != '')
                    {
                        $item = new ListingItem; 
                        $item->description = $value['description'];
                        $item->heading = $value['title'];
                        $item->media_id = $value['media_id'];
                        $this->model->items()->save($item);
                    }
                }
        }
        return Redirect::to(url('admin/listings'))->withSuccess('Listing successfully added!');
    }

    public function update($id)
    {

        $this->model->validate(request()->all(), $id);
         if($obj = $this->model->find($id)){
            $data = request()->all();
            $obj->update($data);

            ListingItem::where('listing_id', $obj->id)->forcedelete();
            if(isset($data['listing']))
                foreach ($data['listing'] as $key => $value) {
                    if($value['title'] !='' || $value['description'] != '')
                    {
                        $item = new ListingItem; 
                        $item->description = $value['description'];
                        $item->heading = $value['title'];
                        $item->media_id = $value['media_id'];
                        $obj->items()->save($item);
                    }
                }
                
            return Redirect::to(url('admin/listings/edit', ['id'=>encrypt($id)]))->withSuccess('Listing successfully updated!');
        } else {
            return Redirect::back()
                    ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                    ->withInput(request()->all());
        }
    }

    
}