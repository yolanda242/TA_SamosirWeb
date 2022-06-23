<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CheckSession;
use Illuminate\Contracts\Session\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function proseslogin(Request $request)
    {
        //validasi
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $log  = $request->only('username', 'password');
        if (Auth::attempt($log)) {
            return redirect()->intended('dashboard_admin')->withSuccess('Login Successfully');
        }
        return redirect("/login")->withSuccess('You have entered the wrong data!');
    }

    public function newIndex()
    {
        return view('admin.login');
    }

    public function prosesloginAdmin(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Masukkan username dahulu.',
                'password.required' => 'Masukkan password dahulu.'
            ]
        );

        $check = Admin::where('username', $request->input('username'))->where('password', $request->input('password'))->first();
        if ($check == NULL) {
            $request->session()->flash('status', 'Failed');
            $request->session()->flash('message', 'Login gagal. Silahkan periksa kembali username / password Anda.');
            return redirect('/admin/login');
        } 
        else {
            $request->session()->put('id_admin', $check->id);
            $request->session()->put('username', $request->input('username'));
            $request->session()->flash('status', 'Success');
            return redirect('/admin/home');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function prosesLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    public function indexPassword(){
        return view('admin.indexPassword');
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param ss \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function ubahPassword(ChangePasswordRequest $request)
    {
        $admin = Admin::where('username',$request->username_admin)->first();

        $dataPassword=$request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'same:password'
            ]);
        
        if($dataPassword['old_password'] == $admin->password){
            $ubahPassword['password'] = $dataPassword['password'];
            Admin::where('id',$admin->id)->update($ubahPassword);
            return redirect()->back()->with('success-change','Terimakasih, password berhasil diganti!');
        }else{
            return redirect()->back()->with('failed-change','Maaf, password gagal diganti!');
        }
        

        // $old_password   = auth()->user()->password;
        // $admin_id       = auth()->user()->id;

        // if(Hash::check($request->input('old_password'), $old_password)){
        //     $user = Admin::find($admin_id);
        //     $admin_id->password = Hash::make($request->input('password'));

        //     if($user->save()){
        //         return redirect()->back()->with('success', 'Change Password berhasil');
        //     }
        //     else{
        //         return redirect()->back()->with('failed', 'Change Password gagal');
        //     }
        // }
        // else{
        //     return redirect()->back()->with('failed', 'Password lama invalid');
        // }
    }
}

