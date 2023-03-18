<?php

namespace App\Models;

use App\Models\Chambre;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lit extends Model
{
    use HasFactory;
    protected $fillable = ['numero_lit', 'chambre_id'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
        //Ou return $this->hasMany(Patient::class, 'foreign_key');
    }
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
        //Ou return $this->hasMany(Patient::class, 'foreign_key');
    }
}
