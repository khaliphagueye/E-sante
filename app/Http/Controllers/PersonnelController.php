<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Personnel;

class PersonnelController extends Controller
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
        $personnels=Personnel::all();
        $services = Service::all();
        return view('personnels/index',compact('personnels','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $services = Service::all();
        return view('personnels/create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Personnel::create($request->all());
        return redirect()->route('personnels.index')->with('notice', 'Ajout d\'un personnel avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personnel = Personnel::find($id);
        return view('personnels/show',compact('personnel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::all();
        $personnel = Personnel::find($id);
        return view('personnels/edit',compact('personnel','services'));
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
        $personnel = Personnel::find($id);
        $services = Service::all();
        $personnel->update($request->all());
        return redirect()->route('personnels.index')->with('notice', 'MAJ d\'un personnel avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnel = Personnel::find($id);
        $personnel->delete();
        return redirect()->route('personnels.index')->with('notice', 'Suppression d\'un personnel avec succes');
    }
}
