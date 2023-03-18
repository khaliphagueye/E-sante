<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Personnel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $fillable=['nom_service'];


    public function patient()
    {
        return $this->belongsToMany(Patient::class);
    }
    public function personnel()
    {
        return $this->hasMany(Personnel::class);
        //Ou return $this->hasMany(Personnel::class, 'foreign_key');
    }
}
