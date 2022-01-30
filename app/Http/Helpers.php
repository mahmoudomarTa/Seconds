<?php
namespace App\Http;


class Helpers {


    public static function can($permission){
        //  $user = auth()->user();

        $userCheck = auth()->guard('admin')->check();
        $user='';

        if($userCheck==false)
        {
            return redirect('auth/admin/login');
        }
        else
        {
            $admin=  auth()->guard('admin')->user();
        }

        if ($admin->id == 1) {
            return true;
        }

        $permissions = array_flatten(explode(',', $admin->permission->permission));
        return in_array($permission, $permissions);
    }


}


?>
