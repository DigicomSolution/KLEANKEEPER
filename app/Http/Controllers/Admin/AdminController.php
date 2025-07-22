<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Widget;
use Input, View, Validator, Redirect, Auth, DB, Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.dashboard');
	}

	public function login()
	{
		if(Auth::user() && Auth::user()->hasRole('Admin'))
		{
			return Redirect::to('admin/dashboard');
		}
		else{
			return view('admin.login');
		}
	}

	public function widgets()
	{
		$widgets = Widget::all();
		$data = [];
		foreach ($widgets as $key => $value) {
			$data[$value->code] = (array) json_decode($value->content);
		}
		return view('admin.widgets', ['data'=>$data]);
	}

	public function save_widget(Request $request)
	{
		$data = $request->all();
		//print_r($data);exit;
		if($obj = Widget::find($data['id']))
		{
			$obj->content = json_encode($data['section']);
			$obj->save();
			return Redirect::to(url('admin/widgets'))->withSuccess('Widget successfully updated!');
		}
		return Redirect::back()
                        ->withErrors("Ooops..Something wrong happend.Please try again.") // send back all errors to the login form
                        ->withInput($data);
	}
	
	public function changePassword(Request $request){
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current_password'), $request->get('new_pwd')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6',
            'new_confirm_password' => ['same:new_password'],
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }

}
