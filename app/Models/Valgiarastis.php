<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Valgiarastis extends Model
{
    protected $fillable = [
        'maitinimo_istaiga_id',
        'pavadinimas',
        'data',
    ];

  
    public function scopeForAdministratorius($query)
    {
        return $query;
    }

    
    public function scopeForPaprastiVartotojai($query)
    {
        return $query;
    }
    
  
}

