<?php

namespace App\Http\Controllers;

use App\Models\Ambient;
use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\Group;
use App\Models\Hourambient;
use App\Models\Subject;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups =Group::simplePaginate(3);
        return view ('groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teachers::all();
        $subjects = Subject::all();
        $groups = group::all();
        $ambients = Ambient::simplePaginate(4);
        $hours = Hourambient::all();
     return view  ('groups.create', compact('teachers','subjects','groups','ambients','hours'));
     

    //  $groups = group::all();
    // return view  ('groups.create', compact('groups'));

    }


    




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groups= new Group;
        $groups->anio = $request->anio;
        $groups->periodo= $request->periodo;
        $groups->teacher_id= $request->teacher_id;
        $groups->subject_id= $request->subject_id;
        $groups->ambient_id=$request->ambient_id;
        $groups->hour_ambient_id=$request->hour_ambient_id;
        
        
        $groups->save();
        return redirect()->route('grupos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
