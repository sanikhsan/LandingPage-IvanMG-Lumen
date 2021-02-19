<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Sites;
use App\Seo;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Concerns\InteractsWithInput;
use Auth;


class AuthController extends Controller
{
    public function adminLogin(){
        return view('admin.pages.auth-login');
    }

    public function adminLogout(Request $request){
        $admin = Admin::where('id',1)->update(['token'=>null]);   

        return redirect("/admin");
    }

    // public function auth(Request $request){
    //     $email = $request->email;
    //     $password = $request->password;

    //     $admin = admin::where("email", $email)->first();

    //     if ($admin && Hash::check($password, $admin->password)) {
    //         return redirect("/admin/home");
    //     }else{
    //         return redirect("admin");
    //     }
    // }
 
    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
 
        $email = $request->input("email");
        $password = $request->input("password");
 
        $admin = admin::where("email", $email)->first();
 
        // if (!$admin) {
        //     $out = [
        //         "message" => "login_failed",
        //         "code"    => 401,
        //         "result"  => [
        //             "token" => null,
        //         ]
        //     ];
        //     return response()->json($out, $out['code']);
        //     return redirect("admin");
        // }
 
        if (Hash::check($password, $admin->password)) {
            $newtoken  = $this->generateRandomString();
 
            $admin->update([
                'token' => $newtoken
            ]);
 
            $out = [
                "message" => "login_success",
                "code"    => 200,
                "result"  => [
                    "token" => $newtoken,
                ]
            ];
        } else {
            $out = [
                "message" => "login_failed",
                "code"    => 401,
                "result"  => [
                    "token" => null,
                ]
            ];
        }

        
        // return response()->json($out, $out['code']);
        return redirect("admin/home?token=". $newtoken);
    }
 
    function generateRandomString($length = 80)
    {
        $karakkter = '012345678dssd9abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $panjang_karakter = strlen($karakkter);
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= $karakkter[rand(0, $panjang_karakter - 1)];
        }
        return $str;
    }
}
