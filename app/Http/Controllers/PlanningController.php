<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planning=Planning::all();

        return view('planning/index',compact('planning'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planning/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Planning::create($request->all());
        return redirect()->route('planning.index')->with('notice', 'Ajout d\'un planning avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planning = Planning::find($id);
        return view('planning/show',compact('planning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planning = Planning::find($id);
        return view('planning/edit',compact('planning'));
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
        $planning = Planning::find($id);
        $planning->update($request->all());
        return redirect()->route('planning.index')->with('notice', 'MAJ d\'un planning avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planning = Planning::find($id);
        $planning->delete();
        return redirect()->route('planning.index')->with('notice', 'Suppression d\'un planning avec succes');
    }
}
