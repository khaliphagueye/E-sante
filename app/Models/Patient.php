<?php

namespace App\Models;

use App\Models\Lit;
use App\Models\Chambre;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['civilite_patient','cni_patient', 'nom_patient', 'prenom_patient', 'telephone_patient', 'mail_patient', 'groupe_sanguin_patient', 'adresse_patient', 'ville_patient', 'chambre_id', 'lit_id'];


    public function service()
    {
        return $this->belongsToMany(Service::class);
    }
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
        //Ou return $this->hasMany(Chambre::class, 'foreign_key');
    }
    public function lit()
    {
        return $this->belongsTo(Lit::class);
        //Ou return $this->hasMany(Lit::class, 'foreign_key');
    }   
}
