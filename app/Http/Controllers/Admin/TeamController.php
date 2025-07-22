<?php

namespace App\Http\Controllers\Admin;

use Spiderworks\MiniWeb\Controllers\BaseController;
use Illuminate\Http\Request as HttpRequest;
use Spiderworks\MiniWeb\Traits\ResourceTrait;

use App\Models\Team;
use View,Redirect, DB;

class TeamController extends BaseController
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Team;
        $this->route = 'admin.team';
        $this->views = 'admin.team';

        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'designation', 'status', 'updated_at');
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
        return view($this->views . '.form')->with('obj', $this->model)->with('tab', 'basic');
    }

    public function edit($id, $tab="basic") {
        $id =  decrypt($id);
        if($obj = $this->model->find($id)){
            return view($this->views . '.form')->with('obj', $obj)->with('tab', $tab);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function store(HttpRequest $r)
    {
        $data = $r->all();
        $this->model->validate();
        $this->model->fill($data);
        $this->model->save();
        return Redirect::to(url('admin/team/edit', array('id'=>encrypt($this->model->id))))->withSuccess('Team member successfully saved!'); 
    }

    public function update(HttpRequest $r)
    {
        $data = $r->all();
        $id = decrypt($data['id']);
        $this->model->validate($data, $id);
        if($obj = $this->model->find($id)){
            $obj->update($data);

            return Redirect::to(url('admin/team/edit', array('id'=>encrypt($obj->id))))->withSuccess('Team member details successfully updated!');
        } else {
            return Redirect::back()
                        ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                        ->withInput(Input::all());
        }
    }

}
