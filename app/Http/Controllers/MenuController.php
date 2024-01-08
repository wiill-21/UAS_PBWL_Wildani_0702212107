<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Menu::all();
        return view ('Menu.index', compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'menu_nama' => 'required|string|max:255',
        'menu_hrg' => 'required|numeric',
    ]);

    Menu::create([
        'menu_nama' => $request->menu_nama,
        'menu_hrg' => $request->menu_hrg,
    ]);

    return redirect('menu');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Menu::find($id);
        return view('Menu.edit',  compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    try {
        $row = Menu::findOrFail($id);

        $row->update([
            'menu_nama' => $request->menu_nama,
            'menu_hrg' => $request->menu_hrg,
        ]);

        return redirect('menu')->with('success', 'Menu updated successfully');
    } catch (ModelNotFoundException $e) {
        return redirect('menu')->with('error', 'Menu not found');
    } catch (\Exception $e) {
        return redirect('menu')->with('error', 'Error updating Menu');
    }
}
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
        {
        $menu = Menu::findOrFail($id);

        // Additional check to confirm the deletion
        if ($menu->delete()) {
            return redirect('menu')->with('success', 'Menu deleted successfully');
        }

        // If delete fails, redirect with an error message
        return redirect('menu')->with('error', 'Failed to delete menu');
    }

    }
