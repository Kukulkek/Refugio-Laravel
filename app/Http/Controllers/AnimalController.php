<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['animals']=Animal::paginate(5);
        return view('animal.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('animal.create');
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
        $datosAnimal = request()->except('_token');

        if($request->hasFile('Foto')){ 
            $datosAnimal['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Animal::insert($datosAnimal);
        return response()->json($datosAnimal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $animal=Animal::findOrFail($id);
        return view('animal.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosAnimal = request()->except(['_token', '_method']);

        if($request->hasFile('Foto')){ 
            $animal=Animal::findOrFail($id);
            Storage::delete('public/'.$animal->Foto);
            $datosAnimal['Foto']=$request->file('Foto')->store('uploads','public');
        }   
         
        Animal::where('id','=',$id)->update($datosAnimal);
        $animal=Animal::findOrFail($id);
        //return view('animal.edit', compact('animal') );
        return redirect('animal')->with('mensaje', 'Animal modificado');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $animal=Animal::findOrFail($id);
        if(Storage::delete('public/'.$animal->Foto)){
            Animal::destroy($id);
        }
        
        return redirect('animal');
    }
}
