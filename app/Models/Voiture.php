<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = ['marque', 'immatriculation', 'personnel_id'];
    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
        //Ou return $this->hasMany(Personnel::class, 'foreign_key');
    }
   
}
