<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaitinimoIstaiga;
use Illuminate\Support\Facades\Auth;


class MaitinimoIstaigaController extends Controller
{
    
    public function create()
    {
        
        if (!Auth::user()->hasRole('Administratorius')) {
            abort(403, 'Unauthorized action.');
        }

        return view('maitinimo_istaigos.create');
    }

    public function store(Request $request)
    {

        if (!Auth::user()->hasRole('Administratorius')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'pavadinimas' => 'required',
            'adresas' => 'required',
            
        ]);

        
        MaitinimoIstaiga::create([
            'pavadinimas' => $request->pavadinimas,
            'adresas' => $request->adresas,
            
        ]);

        
        return redirect()->route('maitinimo_istaigos.index')
            ->with('success', 'Maitinimo įstaiga sėkmingai pridėta.');
    }

    
    public function index()
    {
        
        $maitinimoIstaigos = MaitinimoIstaiga::where('paprastu_vartotoju_matomumas', true)->get();

      
        return view('maitinimo_istaigos.index', compact('maitinimoIstaigos'));
    }

    public function show(MaitinimoIstaiga $maitinimoIstaiga)
    {
        
        if (!$maitinimoIstaiga->paprastu_vartotoju_matomumas) {
            abort(403, 'Unauthorized action.');
        }

        
        return view('maitinimo_istaigos.show', compact('maitinimoIstaiga'));
    }

  
}
