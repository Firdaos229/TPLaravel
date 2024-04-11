<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomVille',
    ];
    /**
     * Get all of the comments for the Ville
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marches(): HasMany
    {
        return $this->hasMany(Marche::class, 'ville_id', 'idVille');
    }

    protected $primaryKey= 'idVille';
}
