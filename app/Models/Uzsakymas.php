<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Uzsakymas extends Model
{
    protected $fillable = [
        'patiekalo_id',
        'vartotojo_id',
        'kiekis',
        'kaina',
        'patvirtintas',
    ];

    
    public function scopeForAdministratorius($query)
    {
        return $query;
    }

    public function scopeForPaprastiVartotojai($query)
    {
        if (Auth::check()) {
            return $query->where('vartotojo_id', Auth::user()->id);
        }

        return $query;
    }
    
    
}
