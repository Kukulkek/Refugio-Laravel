<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use App\Models\Animal;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['tratamientos']=Tratamiento::paginate(5);
        return view('tratamiento.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $animals = Animal::all();
        $data = array("lista_animals" => $animals);
        return response()->view('tratamiento.create', $data, 200);
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
        $datosTratamiento = request()->except('_token');

        Tratamiento::insert($datosTratamiento);
        return response()->json($datosTratamiento);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tratamiento $tratamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $tratamiento=Tratamiento::findOrFail($id);
        return view('tratamiento.edit', compact('tratamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosTratamiento = request()->except(['_token', '_method']);
         
        Tratamiento::where('id','=',$id)->update($datosTratamiento);
        $tratamiento=Tratamiento::findOrFail($id);
        //return view('animal.edit', compact('animal') );
        return redirect('tratamiento')->with('mensaje', 'Tratamiento modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $tratamiento=Tratamiento::findOrFail($id);
        Tratamiento::destroy($id);
        return redirect('tratamiento');
    }
}
