<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Edital;

class AdminController extends Controller
{

    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if($fieldType == 'email'){
            $request->validate([
                'login_id' => 'required|email|exists:admins,email',
                'password' => 'required|min:5|max:45',
            ],[
                'login_id.required' => 'Email ou Username é obrigatório',
                'login_id.email' => 'Email inválido',
                'login_id.exists' => 'Email não existe no sistema',
                'password.required' => 'A senha é obrigatória',
            ]);
        }else{
            $request->validate([
                'login_id' => 'required|exists:admins,username',
                'password' => 'required|min:5|max:45',
            ],[
                'login_id.required' => 'Email ou Username é obrigatório',
                'login_id.exists' => 'Username não existe no sistema',
                'password.required' => 'A senha é obrigatória',
            ]);
        }

        $creds = array(
            $fieldType => $request->login_id,
            'password' => $request->password
        );

        if(Auth::guard('admin')->attempt($creds)){
            return redirect()->route('admin.home');
        }else{
            session()->flash('fail', 'Credenciais incorretas');
            return redirect()->route('admin.login');
        }
    }

    public function logoutHandler(Request $request)
    {
        Auth::guard('admin')->logout();
        session()->flash('fail', 'Você saiu!');
        return redirect()->route('admin.login');
    }

    public function profileView()
    {
        $admin = null;
        if(Auth::guard('admin') -> check() ){
            $admin = Admin::findOrFail(auth()->id());
        }

        return view('back.pages.admin.profile', compact('admin'));
    }

    public function manageEditais()
    {
        $editais = Edital::all();
        return view('back.pages.admin.manage-editais')->with('editais', $editais);
    }
}
