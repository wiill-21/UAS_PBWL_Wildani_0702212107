<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view ('Pelanggan.index', compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
// Make sure to import the Pelanggan model at the top of your file

// ...

    public function store(Request $request)
    {   
        $request->validate([
            'plgn_nama' => 'required|string|max:255',
            'plgn_no' => 'required|string|max:20',
        ]);

        Pelanggan::create([
            'plgn_nama' => $request->plgn_nama,
            'plgn_no' => $request->plgn_no,
        ]);

        return redirect('pelanggan');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $pelanggan = Pelanggan::findOrFail($id);

    return view('pelanggan.show', compact('pelanggan'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::find($id);
        return view('Pelanggan.edit',  compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    try {
        $row = Pelanggan::findOrFail($id);

        $row->update([
            'plgn_nama' => $request->plgn_nama,
            'plgn_no' => $request->plgn_no,
        ]);

        return redirect('pelanggan')->with('success', 'Pelanggan updated successfully');
    } catch (ModelNotFoundException $e) {
        return redirect('pelanggan')->with('error', 'Pelanggan not found');
    } catch (\Exception $e) {
        return redirect('pelanggan')->with('error', 'Error updating Pelanggan');
    }
}
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);

        $row->delete();

        return redirect('pelanggan');

    }
}
