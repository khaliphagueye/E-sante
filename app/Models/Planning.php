<?php

namespace App\Models;

use App\Models\Personnel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class planning extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'personnel_id'];

    public function personnel()
    {
        return $this->hasMany(Personnel::class);
        //Ou return $this->belongsTo(Personnel::class, 'foreign_key');
    }
}
