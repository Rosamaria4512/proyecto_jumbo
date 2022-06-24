<?php

namespace App\Http\Controllers;

use App\Models\Ambient;
use Illuminate\Http\Request;

class AmbientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambients=Ambient::simplePaginate(4);
        return view('ambients.index', compact('ambients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ambients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambient= new Ambient;
        $ambient->aula_lunes = $request->aula_lunes;
        $ambient->aula_martes= $request->aula_martes;
        $ambient->aula_miercoles= $request->aula_miercoles;
        $ambient->aula_jueves= $request->aula_jueves;
        $ambient->aula_viernes= $request->aula_viernes;
        
        $ambient->save();
        return redirect()->route('ambientes.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function show(Ambient $ambient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ambiente = Ambient::find($id);
       return view('ambients.edit' , compact('ambiente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ambiente = Ambient::find($id);
        $ambiente->aula_lunes = $request->aula_lunes;
        $ambiente->aula_martes= $request->aula_martes;
        $ambiente->aula_miercoles= $request->aula_miercoles;
        $ambiente->aula_jueves= $request->aula_jueves;
        $ambiente->aula_viernes= $request->aula_viernes;
        
        $ambiente->save();
        return redirect()->route('ambientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ambient::find($id)->delete();
        return back();
    }
}
