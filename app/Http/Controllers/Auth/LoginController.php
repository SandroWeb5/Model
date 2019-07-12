<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Log;

class LoginController extends Controller
{

    public function login(){
        $credentials    = $this->validate(Request(), [
            'email'     => 'email|required|string',
            'password'  => 'required|string'
        ]);
        if(Auth::attempt($credentials)){
            /*Logs*/
            $logs['usuario']    = auth()->user()->name;
            $logs['email']      = auth()->user()->email;
            $logs['user_id']    = auth()->user()->id;
            $logs['evento']     = 'Entrou no Sistema';
            Log::create($logs);
            return redirect()->route('admin');
        }
        return back()->withErrors(['email' => trans('auth.failed')])->withInput(request(['email']));
    }

    public function showLogin(){
        return view('auth.login');
    }

     public function logout(){
        /*Logs*/
        $logs['usuario']    = auth()->user()->name;
        $logs['email']      = auth()->user()->email;
        $logs['user_id']    = auth()->user()->id;
        $logs['evento']     = 'Saiu no Sistema';
        Log::create($logs);
        Auth::logout();
        return redirect('/');
    }

}
