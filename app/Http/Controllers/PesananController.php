<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pesanan::all();
        return view ('Pesanan.index', compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'psn_nama_menu' => 'required|string|max:255',
        'psn_nama_plgn' => 'required|string|max:20',
        'psn_jlh' => 'required|numeric',
        'psn_tgl' => 'required|date',
    ]);

    Pesanan::create([
        'psn_nama_menu' => $request->psn_nama_menu,
        'psn_nama_plgn' => $request->psn_nama_plgn,
        'psn_jlh' => $request->psn_jlh,
        'psn_tgl' => $request->psn_tgl,
    ]);

    
    return redirect('pesanan');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesanan = Pesanan::findOrFail($id);

        return view('pesanan.show', compact('pesanan'));       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pesanan::findOrFail($id);
        return view('pesanan.edit', compact('row'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'psn_nama_menu' => 'required|string|max:255',
            'psn_nama_plgn' => 'required|string|max:20',
            'psn_jlh' => 'required|numeric',
            'psn_tgl' => 'required|date',
        ]);

        $row = Pesanan::findOrFail($id);

        $row->update([
            'psn_nama_menu' => $request->psn_nama_menu,
            'psn_nama_plgn' => $request->psn_nama_plgn,
            'psn_jlh' => $request->psn_jlh,
            'psn_tgl' => $request->psn_tgl,
        ]);

        return redirect('pesanan')->with('success', 'Pesanan updated successfully');
    }
    
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pesanan::findOrFail($id);

        $row->delete();

        return redirect('pesanan');

    }
}
