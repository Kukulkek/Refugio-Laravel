<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['razas']=Raza::paginate(5);
        return view('raza.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('raza.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosRaza = request()->except('_token');
        Raza::insert($datosRaza);
        return redirect('raza');
    }

    /**
     * Display the specified resource.
     */
    public function show(Raza $raza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $raza=Raza::findOrFail($id);
        return view('raza.edit', compact('raza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosRaza = request()->except(['_token', '_method']);
         
        Raza::where('id','=',$id)->update($datosRaza);
        $raza=Raza::findOrFail($id);
        //return view('animal.edit', compact('animal') );
        return redirect('raza')->with('mensaje', 'Raza modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $raza=Raza::findOrFail($id);
        Raza::destroy($id);
        return redirect('raza');
    }
}
