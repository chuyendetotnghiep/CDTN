<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function getLogin(){
        return view('frontend.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $arr =
            [
                'code' => $request->code,
                'password' => $request->password
            ];
        if ($request->remember = 'Remember Me') {
            $remember = true;
        }
        else{
            $remember = false;
        }
        if (Auth::attempt($arr,$remember)) {
            return redirect()->route('backend.home')->with('flash_success','Đăng nhập thành công!!! thích quá <3');
        }
        else{
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
        }
    }
}
