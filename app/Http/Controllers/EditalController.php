<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edital;

class EditalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editais = Edital::all();
        return view('back.pages.admin.manage-editais')->with('editais', $editais);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.pages.admin.editals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Edital::create($request->all());

        return redirect('editals')->with('sucesso', "Edital cadastrada com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Edital $edital)
    {
        return view('back.pages.admin.editals.show')->with('edital', $edital);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Edital $edital)
    {
        return view('back.pages.admin.editals.edit', compact('edital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Edital $edital)
    {
        $edital->fill($request->all())->save();

        return redirect()->route('editals.index')->with('sucesso', "Edital editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edital $edital)
    {
        $edital->delete();

        return redirect()->route('editals.index')->with('sucesso', "edital apagada com sucesso!");
    }
}
