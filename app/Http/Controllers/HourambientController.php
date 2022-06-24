<?php

namespace App\Http\Controllers;


use App\Models\Hourambient;
use Illuminate\Http\Request;

class hourambientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours=Hourambient::simplePaginate(4);
        return view('hour_ambients.index', compact('hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hour_ambients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horas= new Hourambient;
        $horas->hora_lunes = $request->hora_lunes;
        $horas->hora_martes= $request->hora_martes;
        $horas->hora_miercoles= $request->hora_miercoles;
        $horas->hora_jueves= $request->hora_jueves;
        $horas->hora_viernes= $request->hora_viernes;
        
        $horas->save();
        return redirect()->route('hora_grupo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hourambient  $horasambient
     * @return \Illuminate\Http\Response
     */
    public function show(Hourambient $horasambient)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hourambient  $horasambient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horas = Hourambient::find($id);
       return view('hour_ambients.edit' , compact('horas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hourambient  $horasambient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $horas = Hourambient::find($id);
        $horas->hora_lunes = $request->hora_lunes;
        $horas->hora_martes= $request->hora_martes;
        $horas->hora_miercoles= $request->hora_miercoles;
        $horas->hora_jueves= $request->hora_jueves;
        $horas->hora_viernes= $request->hora_viernes;
        
        $horas->save();
        return redirect()->route('hora_grupo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hourambient  $horasambient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hourambient::find($id)->delete();
        return back();
    }
}
