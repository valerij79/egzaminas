<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Patiekalas extends Model
{
    protected $fillable = [
        'pavadinimas',
        'aprasymas',
        'kaina',
        
    ];
    
    public function scopeForAdministratorius($query)
    {
        if (Auth::check() && Auth::user()->hasRole('Administratorius')) {
            return $query;
        }

        return $query->where('paprastu_vartotoju_matomumas', true);
    }

    
    public function scopeForPaprastiVartotojai($query)
    {
        return $query->where('paprastu_vartotoju_matomumas', true);
    }
    
}
