<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['especies']=Especie::paginate(5);
        return view('especie.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('especie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosEspecie = request()->except('_token');
        Especie::insert($datosEspecie);
        return redirect('especie');
    }

    /**
     * Display the specified resource.
     */
    public function show(Especie $especie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $especie=Especie::findOrFail($id);
        return view('especie.edit', compact('especie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosEspecie = request()->except(['_token', '_method']);
         
        Especie::where('id','=',$id)->update($datosEspecie);
        $especie=Especie::findOrFail($id);
        //return view('animal.edit', compact('animal') );
        return redirect('especie')->with('mensaje', 'Especie modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $especie=Especie::findOrFail($id);
        Especie::destroy($id);
        return redirect('especie');
    }
}
