<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voiture;
use App\Models\Personnel;
class VoitureController extends Controller
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
        $personnels = Personnel::all();
        $voitures=Voiture::all();
        return view('voitures/index',compact('voitures', 'personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personnels = Personnel::all();
        return view('voitures/create', compact('personnels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'immatriculation'=>'required | unique:voitures',
                'marque'=>'required '    
            ]
        );



        $personnels = Personnel::all();
        Voiture::create($request->all());
        return redirect()->route('voitures.index')->with('notice', 'Ajout d\'une voiture avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personnels = Personnel::all();
        $voiture = Voiture::find($id);
        return view('voitures/show',compact('voiture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personnels = Personnel::all();
        $voiture = Voiture::find($id);
        return view('voitures/edit',compact('voiture', 'personnels'));
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
        $personnels = Personnel::all();
        $voiture = Voiture::find($id);
        $voiture->update($request->all());
        return redirect()->route('voitures.index')->with('notice', 'MAJ d\'une voiture avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnels = Personnel::all();
        $voiture = Voiture::find($id);
        $voiture->delete();
        return redirect()->route('voitures.index')->with('notice', 'Suppression d\'une voiture avec succes');
    }
}
