<?php namespace App\Http\Controllers\Admin;

use Spiderworks\MiniWeb\Controllers\BaseController;
use Spiderworks\MiniWeb\Traits\ResourceTrait;
use App\User, Request, View, Redirect, DB, Datatables, Sentinel, Mail, Validator, Image;
use Activation as Act;
use App\Models\Roles;
use App\Models\RoleUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request as HttpRequest;

class UserController extends BaseController
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

        $this->model = new User;

        $this->route = 'admin.users';
        $this->views = 'admin.users';
        $this->url = "admin/users/";

        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'email', 'name', 'created_at', 'updated_at', 'banned_at');
        
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->editColumn('updated_at', function($obj) { return date('m/d/Y H:i:s', strtotime($obj->updated_at)); })
            ->editColumn('banned_at', function($obj) use ($route) {
                if($obj->banned_at)
                    return '<a href="' . route( $route . '.change-status',  [encrypt($obj->id)] ) . '" class="btn btn-danger btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to enable this user?" ><i class="fa fa-times-circle"></i></a>';
                else
                   return '<a href="' . route( $route . '.change-status',  [encrypt($obj->id)] ) . '" class="btn btn-success btn-sm miniweb-btn-warning-popup" data-message="Are you sure, want to disable this user?" ><i class="fa fa-check-circle"></i></a>'; 
            })
            ->rawColumns(['banned_at', 'action_edit', 'action_delete']);
    }

    public function create()
    {
        $roles = Roles::all();
        return view($this->views . '.form')->with('obj', $this->model)->with('roles', $roles);
    }

    public function edit($id) {
        $id =  decrypt($id);
        if($obj = $this->model->find($id)){
            $roles = Roles::all();
            if($obj->banned_at)
                $obj->status = 0;
            else
                $obj->status = 1;
            return view($this->views . '.form')->with('obj', $obj)->with('roles', $roles);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function store(HttpRequest $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:password_confirmation',

        ]);
        if ($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator->errors()->all());
        }
        else
        {
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            if(isset($data['roles']))
                $user->assignRole($data['roles']);

            return Redirect::to(url('admin/users/edit', array('id'=>encrypt($user->id))))->withSuccess('User details successfully saved!'); 
        } 
    }

    public function update(HttpRequest $request)
    {
        $data = $request->all();
        $id = decrypt($data['id']);
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,

        ]);
        if ($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator->errors()->all());
        }
        else
        {
            if($obj = $this->model->find($id)){
                $obj->update($data);
                RoleUsers::where('user_id', $obj->id)->delete();
                if(isset($data['roles']))
                    $obj->assignRole($data['roles']);

                return Redirect::to(url('admin/users/edit', array('id'=>encrypt($obj->id))))->withSuccess('User details successfully updated!');
            } else {
                return Redirect::back()
                        ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                        ->withInput(Input::all());
            }
        }
    }

    public function destroy($id) {
        $id =  decrypt($id);
        $obj = $this->model->find($id);
        if ($obj) {
            $obj->delete();
            return Redirect::to(url('admin/users'))->withSuccess('User successfully deleted!');
        }
        
        return Redirect::back()->withErrors("Ooops..Something wrong happend.Please try again.");
    }

    public function changeStatus($id)
    {
        $id = decrypt($id);
        $obj = $this->model->find($id);
        if ($obj) {
            $status = $obj->banned_at;
            if($status)
                $obj->banned_at = null;
            else
                $obj->banned_at = date('Y-m-d H:i:s');
            $obj->save();
            $message = ($status)?"enabled":"disabled";
            return $this->redirect($message,'success', 'index');
        }
        return $this->redirect('notfound');
    }

}
