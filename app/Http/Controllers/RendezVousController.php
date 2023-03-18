<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezVousController extends Controller
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
        $rendezvous=Rendezvous::all();

        return view('rendezvous/index',compact('rendezvous'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rendezvous/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rendezvous::create($request->all());
        return redirect()->route('rendezvous.index')->with('notice', 'Ajout d\'un rendezvous avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rendezvous = Rendezvous::find($id);
        return view('rendezvous/show',compact('rendezvous'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rendezvous = Rendezvous::find($id);
        return view('rendezvous/edit',compact('rendezvous'));
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
        $rendezvous = Rendezvous::find($id);
        $rendezvous->update($request->all());
        return redirect()->route('rendezvous.index')->with('notice', 'MAJ d\'un rendezvous avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->delete();
        return redirect()->route('rendezvous.index')->with('notice', 'Suppression d\'un rendezvous avec succes');
    }
}
