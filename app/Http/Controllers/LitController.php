<?php

namespace App\Http\Controllers;

use App\Models\Lit;
use App\Models\Chambre;
use Illuminate\Http\Request;

class LitController extends Controller
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
        $lits=Lit::all();
        $chambres = Chambre::all();

        return view('lits/index',compact('lits', 'chambres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chambres = Chambre::all();
        return view('lits/create', compact('chambres'));
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
                'numero_lit'=>'required | unique:lits'
                
            ]
        );
        Lit::create($request->all());
        Chambre::all();
        return redirect()->route('lits.index')->with('notice', 'Ajout d\'un lit avec succes');
    }
    public function lister($id){

        $chambre = Chambre::find($id);
        // foreach ($lits as $l) {
        //     if ($l->chambre->chambre_id === $id ) {
        //         $tab->push($l->chambre->chambre_id);
        //     }    
        // }
        return ( response()->json($chambre->lits()->get()));
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lit = Lit::find($id);
        return view('lits/show',compact('lit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lit = Lit::find($id);
        return view('lits/edit',compact('lit'));
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
        $lit = Lit::find($id);
        $lit->update($request->all());
        return redirect()->route('lits.index')->with('notice', 'MAJ d\'un lit avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lit = Lit::find($id);
        $lit->delete();
        return redirect()->route('lits.index')->with('notice', 'Suppression d\'un lit avec succes');
    }
}
