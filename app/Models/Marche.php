<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomMarche',
        'description',
        'capacite',
        'adresse',
        'telephone',
        'image',
    ];
    protected $primaryKey= 'idMarche';

    public function ville(){
        return $this->belongsTo (Ville::class, 'ville_id', 'idVille');
    }
}
