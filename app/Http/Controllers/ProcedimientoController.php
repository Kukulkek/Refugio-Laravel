<?php

namespace App\Http\Controllers;

use App\Models\Procedimiento;
use Illuminate\Http\Request;

class ProcedimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['procedimientos']=Procedimiento::paginate(5);
        return view('procedimiento.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('procedimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosProcedimiento = request()->except('_token');
        Procedimiento::insert($datosProcedimiento);
        return redirect('procedimiento');
    }

    /**
     * Display the specified resource.
     */
    public function show(Procedimiento $procedimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $procedimiento=Procedimiento::findOrFail($id);
        return view('procedimiento.edit', compact('procedimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosProcedimiento = request()->except(['_token', '_method']);
         
        Procedimiento::where('id','=',$id)->update($datosProcedimiento);
        $procedimiento=Procedimiento::findOrFail($id);
        //return view('animal.edit', compact('animal') );
        return redirect('procedimiento')->with('mensaje', 'Procedimiento modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $procedimiento=Procedimiento::findOrFail($id);
        Procedimiento::destroy($id);
        return redirect('procedimiento');
    }
}
