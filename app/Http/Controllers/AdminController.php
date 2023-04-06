<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_quotes()
    {
        return view('admin.quotes');
    }
  
    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_berita()
    {
        return view('admin.berita');
    }

    public function show_album()
    {
        return view('admin.album');
    }

    public function show_info()
    {
        return view('admin.info');
    }


    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

    public function show(string $id)
    {
        
    }

    
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
