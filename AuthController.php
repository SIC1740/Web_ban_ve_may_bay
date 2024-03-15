<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showFormRegister()
    {
        return view(view:'auth.register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        
        $user->save();
        return redirect()->route(route:'show-form-login')->with('success','Dang ky thanh cong');
    }

    public function showFormLogin()
    {
        return view(view:'auth.login');
    }
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email,'password'=>$request->password]))
        {
            return redirect()->route(route:'show-form-trangchu');
        }
        return redirect()->route(route:'show-form-login');
    }
    
    public function showProfile()
    {
        if(Auth::check()){
            return view(view: 'auth.profile');
        }
        return redirect()->route(route:'show-form-login');
    }

    public function profile(Request $request)
    {
        $user = User::find(\auth()->id());
        $user->name = $request->name;
        if($request->change_password == 'on'){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->route(route:'show-profile')->with('success','Cap nhat thanh cong');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route(route:'show-form-login');
    }

    public function showFormtrangchu()
    {
        return view(view:'auth.idex');
    }

    public function trangchu()
    {
        return redirect()->route(route:'show-form-trangchu');
    }

    public function formmiss()
    {
        return view(view:'auth.misspass');
    }

    public function miss()
    {
        return redirect()->route(route:'formmiss');
    }

    

    public function formintro()
    {
        return view(view:'auth.gioithieu');
    }

    public function intro()
    {
        return redirect()->route(route:'formintro');
    }

    public function formsupport()
    {
        return view(view:'auth.hotro');
    }

    public function support()
    {
        return redirect()->route(route:'formsupport');
    }

    public function formsearch()
    {
        return view(view:'auth.timkiem');
    }

    public function search()
    {
        return redirect()->route(route:'formsearch');
    }

    public function formpayment()
    {
        return view(view:'auth.thanhtoan');
    }

    public function payment()
    {
        return redirect()->route(route:'formpayment');
    }
}