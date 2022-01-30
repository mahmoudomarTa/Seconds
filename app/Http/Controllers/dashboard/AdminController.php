<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Helpers;
use App\Models\Admin;
use App\Models\general\AdminPermission;
use App\Models\general\Permission;
use App\Models\landing_page\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index($local)
    {
        app()->setLocale($local);
//        if (Helpers::can('admins')) {
            $admins = Admin::all();
            return view('admin.dashboard.admin.index')->with(compact('admins'));
//        }else{
//            return view('admin.dashboard.no_permission');
//        }
    }

    function create($local){
        app()->setLocale($local);
        $permissions = Permission::all();
        return view('admin.dashboard.admin.create')->with(compact('permissions'));
    }

    function store(Request $request){


        $name = $request['name'];
        $permissions = $request->input('permissions');
        $email = $request['email'];
        $password = $request['password'];

        $admin = new Admin();
        $admin->name=$name;
        $admin->email=$email;
        $admin->password=Hash::make($password);
        $admin->save();

        $permissions = implode(',', $permissions);
        $admin_permissions = new AdminPermission();
        $admin_permissions->admin_id=$admin->id;
        $admin_permissions->permission=$permissions;
        $admin_permissions->save();


        return redirect()->back();

    }


    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in admins table'
        ]);


        $creds = $request->only('email', 'password');
        $status=Auth::guard('admin')->attempt($creds);
        if ($status) {
            return redirect('admin/dashboard/home/'.app()->getLocale());
        } else {
            return redirect('admin/login')->with('fail', 'Incorrect credentials');
        }


    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }



    function edit($local,$id){
        app()->setLocale($local);
        $permissions = Permission::all();

        $admin = Admin::where('id',$id)->first();
        $adminPermissions = array_flatten(explode(',', AdminPermission::where('admin_id',$id)->first()->permission));

//        return $adminPermissions;
        return view('admin.dashboard.admin.edit')->with(compact('admin','permissions','adminPermissions'));
    }

    function update(Request $request, $id){

        $name = $request['name'];
        $email = $request['email'];
        $password = $request['password'];
        $permissions = $request->input('permissions');

        $admin = Admin::find($id);;
        $admin->name=$name;
        $admin->email=$email;
        $admin->password=Hash::make($password);
        $admin->save();


        $permissions = implode(',', $permissions);
        $admin_permissions = AdminPermission::where('admin_id',$id)->first();
        $admin_permissions->admin_id=$admin->id;
        $admin_permissions->permission=$permissions;
        $admin_permissions->save();

        return redirect()->back();
    }
    function destroy($id){
        $state = Admin::where('id',$id)->delete();
        return redirect()->back()->with('state',$state);
    }


}
