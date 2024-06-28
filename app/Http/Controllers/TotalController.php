<?php

namespace App\Http\Controllers;

use App\Models\Total;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TotalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totals = Total::withCount('todo')->where('user_id', auth()->user()->id)->get();
        return view('total.index', compact('totals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('total.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);
        Total::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title
        ]);

        return redirect()->route('total.index')->with('success', 'Total created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Total $total)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Total $total)
    {
        if (auth()->user()->id == $total->user_id) {
            return view('total.edit', compact('total'));
        } else {
            return redirect()->route('total.index')->with('danger', 'You are not authorized to edit this category!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Total $total)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        // Practical
        // $todo->title = $request->title;
        // $todo->save();

        // Eloquent Way - Readable
        $total->update([
            'title' => ucfirst($request->title),
        ]);
        return redirect()->route('total.index')->with('success', 'Todo category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Total $total)
    {
        if (auth()->user()->id == $total->user_id) {
            $total->delete();
            return redirect()->route('total.index')->with('success', 'Total deleted successfully!');
        } else {
            return redirect()->route('total.index')->with('danger', 'You are not authorized to delete this category!');
        }
    }
}
