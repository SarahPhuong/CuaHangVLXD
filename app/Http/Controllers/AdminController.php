<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//co de su dung login auth
use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
    //
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $email=$request->input('email');
        $password=$request->input('password');
    
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return redirect('tongquan');
        }
        else
        {
            return view('login',['mess'=>'Sai email hoặc passowrd']);
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return view('login');
    }
    public function getUser()
   {
    //dung midellwere de bao ve ng dung nhom 2 cai route ng dung
        if(Auth::check())
        {
           $user=Auth::user();
            return view('taikhoan',['user'=>$user]);
        }
        else
            return redirect('login');
   }
   public function postUser(Request $request)
   {

        $this->validate($request,
        [
            
            'name'=>'required'
            

        ],
        [
           
            'name.required'=>'Bạn chưa nhập tên của bạn'
        ]); 
        $user=Auth::user();//dang đăng nhập nên lay lun du lieu cua ng dug ra de sua
        $user->name=$request->name;
        $user->save();
        //neu nguoi dung muốn đổi mật khẩu
        if($request->has('checkPassword'))
        {
            $this->validate($request,
            [
                'password'=>'required|min:3',
                'passwordAgain'=>'required|same:password'

            ],
            [
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password phải có ít nhất 3 ký tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu không trùng nhau'

            ]);
            $user->password=bcrypt($request->password);

        }
        $user->save();
        return redirect('tongquan')->with('thongbao','Sửa thành công');

   }
}
