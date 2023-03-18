<?php

namespace App\Models;

use App\Models\Lit;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = ['nom_chambre'];

    public function patient()
    {
        return $this->hasMany(Patient::class);
        //Ou return $this->hasMany(Patient::class, 'foreign_key');
    }

    public function lits()
    {
        return $this->hasMany(Lit::class);
        //Ou return $this->hasMany(Lit::class, 'foreign_key');
    }
}
