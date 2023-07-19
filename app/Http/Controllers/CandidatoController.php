<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Candidato $candidato)
    {
        return view('back.pages.candidate.profile')->with('candidato', $candidato);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Candidato::create($request->all());

        return redirect('candidatos')->with('sucesso', "Usuário cadastrado com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidato $candidato)
    {
        return view('back.pages.candidate.show')->with('candidato', $candidato);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidato $candidato)
    {
        return view('back.pages.candidate.edit', compact('candidato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidato $candidato)
    {
        $candidato->fill($request->all())->save();

        return redirect()->route('candidatos.profile')->with('sucesso', "Edital editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidato $candidato)
    {

    }

    public function loginHandler( Request $request)
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

        if(Auth::guard('candidato')->attempt($creds)){
            return redirect()->route('candidatos.home');
        }else{
            session()->flash('fail', 'Credenciais incorretas');
            return redirect()->route('candidatos.login');
        }
    }

    public function __invoke( Request $request)
    {
        return view('back.pages.candidate.home');
    }
}
