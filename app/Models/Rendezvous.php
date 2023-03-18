<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;
    protected $fillable = ['civilite', 'prenom', 'nom', 'num_tel', 'email', 'date_rv', 'service', 'commentaire'];
}
