<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('search', '');
    
        $services = Service::where('service_name', 'like', '%' . $searchTerm . '%')
                            ->orWhere('service_desc', 'like', '%' . $searchTerm . '%')
                            ->get();
    
        $categories = Kategori::all();
    
        // Debug the $categories variable
        dd($categories);
    
        return view('landingpage.index', compact('services', 'searchTerm', 'categories'));
    }    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
