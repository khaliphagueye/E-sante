<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Voiture;
use App\Models\Planning;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = ['matricule', 'civilite', 'prenom', 'nom', 'mail', 'telephone', 'statut', 'service_id'];


    public function service()
    {
        return $this->belongsTo(Service::class);
        //Ou return $this->belongsTo(Service::class, 'foreign_key');
    }
    public function planning()
    {
        return $this->belongsTo(Planning::class);
        //Ou return $this->belongsTo(Planning::class, 'foreign_key');
    }
    public function voiture()
    {
        return $this->hasMany(Voiture::class);
        //Ou return $this->belongsTo(Voiture::class, 'foreign_key');
    }
    
    
}
