<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
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
        $chambres=Chambre::all();

        return view('chambres/index',compact('chambres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chambres/create');
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
                'nom_chambre'=>'required | unique:chambres'
            ]
        );
        Chambre::create($request->all());
        return redirect()->route('chambres.index')->with('notice', 'Ajout d\'une chambre avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chambre = Chambre::find($id);
        return view('chambres/show',compact('chambre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chambre = Chambre::find($id);
        return view('chambres/edit',compact('chambre'));
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
        $chambre = Chambre::find($id);
        $chambre->update($request->all());
        return redirect()->route('chambres.index')->with('notice', 'MAJ d\'une chambre avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chambre = Chambre::find($id);
        $chambre->delete();
        return redirect()->route('chambres.index')->with('notice', 'Suppression d\'une chambre avec succes');
    }
}
