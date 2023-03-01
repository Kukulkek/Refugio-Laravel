<?php

namespace App\Http\Controllers;

use App\Models\Adopcion;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AdopcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['adopcions']=Adopcion::paginate(5);
        return view('adopcion.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('adopcion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $campos=[
            'Nombre'=>'required|string|max:20'
        ];
        $mensaje=[
            'required'=>'El :attribute es required'
        ];

        $this->validate($request, $campos, $mensaje);
        
        //$datosAnimal = request()->all();
        $datosAdopcion = request()->except('_token');

        Adopcion::insert($datosAdopcion);
        return response()->json($datosAdopcion);
    }

    /**
     * Display the specified resource.
     */
    public function show(Adopcion $adopcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $adopcion=Adopcion::findOrFail($id);
        return view('adopcion.edit', compact('adopcion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adopcion $adopcion)
    {
        //
        $datosAdopcion = request()->except(['_token', '_method']);
         
        Adopcion::where('id','=',$id)->update($datosAdopcion);
        $adopcion=Adopcion::findOrFail($id);
        //return view('animal.edit', compact('animal') );
        return redirect('adopcion')->with('mensaje', 'Adopcion modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $adopcion=Adopcion::findOrFail($id);
        Adopcion::destroy($id);
        return redirect('adopcion');
    }
}
