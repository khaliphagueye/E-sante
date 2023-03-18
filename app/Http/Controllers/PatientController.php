<?php

namespace App\Http\Controllers;

use App\Models\Lit;
use App\Models\Chambre;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
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
        $patients=Patient::all();
        $chambres = Chambre::all();
        $lits = Lit::all();
        return view('patients/index',compact('patients', 'chambres', 'lits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){      
        $chambres = Chambre::all();
        $lits = Lit::all();
        return view('patients/create', compact('chambres', 'lits'));
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
                // civilite_patient','cni_patient', 'nom_patient', 'prenom_patient', 'telephone_patient', 'mail_patient', 'groupe_sanguin_patient', 'adresse_patient', 'ville_patient', 'chambre_id', 'lit_id'
                'civilite_patient'=>'required ',
                'cni_patient'=>'required | unique:patients',
                'nom_patient'=>'required',
                'prenom_patient'=>'required',
                'telephone_patient'=>'required',
                'mail_patient'=>'required | unique:patients',
                'groupe_sanguin_patient'=>'required',
                'adresse_patient'=>'required',
                'ville_patient'=>'required',
                'chambre_id'=>'required ',
                'lit_id'=>'required | unique:patients'    
            ]
        );
        Patient::create($request->all());
        return redirect()->route('patients.index')->with('notice', 'Ajout d\'un patient avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patients/show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients/edit',compact('patient'));
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
        $patient = Patient::find($id);
        $patient->update($request->all());
        return redirect()->route('patients.index')->with('notice', 'MAJ d\'un patient avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->route('patients.index')->with('notice', 'Suppression d\'un patient avec succes');
    }




    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $patients = Patient::query()
            ->where('nom_patient', 'like', "%{$key}%")
            ->orWhere('cni_patient', 'like', "%{$key}%")
            ->get();

        $chambres = Chambre::all();

        $lits = Lit::all();

        

        return view('search', [
            'key' => $key,
            'patients' => $patients,
            'chambres' => $chambres,
            'lits' => $lits
        ]);
    }


}
