<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPublisher = Publisher::all();
        return view('publisher.index', compact('allPublisher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Make validation
        $validatedData = $request->validate([
            'publisher_name' => 'required|max:100',
        ]);

        // Save data
        Publisher::create($validatedData);

        // Redirect
        return redirect()->route('publisher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view('publisher.show', compact('publisher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('publisher.edit', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        // Make validation
        $validatedData = $request->validate([
            'publisher_name' => 'required|max:100',
        ]);

        // Update data
        $publisher->update($validatedData);

        // Redirect
        return redirect()->route('publisher.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return redirect()->route('publisher.index');
    }
}
