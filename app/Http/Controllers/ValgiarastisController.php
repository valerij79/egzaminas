<?php

namespace App\Http\Controllers;

use App\Models\Valgiarastis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValgiarastisController extends Controller
{
    public function create()
    {
        if (!Auth::user()->hasRole('Administratorius')) {
            abort(403, 'Unauthorized action.');
        }

        return view('valgiarasciai.create');
    }

    public function store(Request $request)
    {
        if (!Auth::user()->hasRole('Administratorius')) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'pavadinimas' => 'required',
            'data' => 'required',
        ]);

        Valgiarastis::create([
            'pavadinimas' => $request->pavadinimas,
            'data' => $request->data,
        ]);

        return redirect()->route('valgiarasciai.index')
            ->with('success', 'Valgiaraštis sėkmingai pridėtas.');
    }

    public function index()
    {
        $valgiarasciai = Valgiarastis::all();

        return view('valgiarasciai.index', compact('valgiarasciai'));
    }

    public function show(Valgiarastis $valgiarastis)
    {
        return view('valgiarasciai.show', compact('valgiarastis'));
    }
    
}
