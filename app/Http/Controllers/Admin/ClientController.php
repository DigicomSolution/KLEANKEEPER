<?php

namespace App\Http\Controllers\Admin;

use Spiderworks\MiniWeb\Controllers\BaseController;
use Illuminate\Http\Request as HttpRequest;
use Spiderworks\MiniWeb\Traits\ResourceTrait;

use App\Models\Client;
use App\Models\Service;
use View,Redirect, DB;

class ClientController extends BaseController
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Client;
        $this->route = 'admin.clients';
        $this->views = 'admin.clients';

        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'short_description', 'status', 'updated_at');
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
            ->addColumn('action_delete', function($obj) use ($route) { 
                return '<a href="'.route($route.'.destroy', [encrypt($obj->id)]).'" class="btn btn-danger miniweb-btn-warning-popup" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." title="' . ($obj->updated_at ? 'Last updated at : ' . date('d/m/Y - h:i a', strtotime($obj->updated_at)) : '') . '"><i class="fa fa-trash"></i></a>';
            })
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    public function create()
    {
        $services = Service::all();
        return view($this->views . '.form')->with('obj', $this->model)->with('tab', 'basic')->with('services', $services);
    }

    public function edit($id, $tab="basic") {
        $id =  decrypt($id);
        if($obj = $this->model->find($id)){
            $services = Service::all();
            return view($this->views . '.form')->with('obj', $obj)->with('tab', $tab)->with('services', $services);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function store(HttpRequest $r)
    {
        $data = $r->all();
        $this->model->validate();
        $data['is_featured'] = isset($data['is_featured'])?1:0;
        $this->model->fill($data);
        $this->model->save();
        if(trim($data['services']) != '' )
        {
            $data['service'] = explode(',', $data['services']);
            foreach($data['service'] as $key=>$service)
                $this->model->services()->attach((int)$service, ['priority' => $key+1]);
        }
        return Redirect::to(url('admin/clients/edit', array('id'=>encrypt($this->model->id))))->withSuccess('Client successfully saved!'); 
    }

    public function update(HttpRequest $r)
    {
        $data = $r->all();
        $id = decrypt($data['id']);
        $this->model->validate($data, $id);
        if($obj = $this->model->find($id)){

            $services = $obj->services->pluck('id')->toArray();
            $new_services = (trim($data['services']) != '')?explode(',', $data['services']):[];
            $services_to_remove = array_diff($services,$new_services);

            if($services_to_remove)
                $obj->services()->detach($services_to_remove);

            if($new_services)
            {
                foreach ($new_services as $key => $service) {
                    $check_exist = DB::table('client_services')->where('client_id', $obj->id)->where('service_id', (int)$service)->first();
                    if($check_exist)
                        $obj->services()->updateExistingPivot((int)$service, ['priority' => $key+1]);
                    else
                        $obj->services()->attach((int)$service, ['priority' => $key+1]);
                }
            }

            $data['is_featured'] = isset($data['is_featured'])?1:0;
            $obj->update($data);

            return Redirect::to(url('admin/clients/edit', array('id'=>encrypt($obj->id))))->withSuccess('Client details successfully updated!');
        } else {
            return Redirect::back()
                        ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                        ->withInput(Input::all());
        }
    }

}
