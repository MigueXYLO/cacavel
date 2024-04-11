<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $allDisciplines = Discipline::all();
        return view('disciplines.index')->with('disciplines', $allDisciplines);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $newDiscipline= new Discipline();
        return view('disciplines.create')->with('discipline', $newDiscipline);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        Discipline::create($request->all());
        return redirect()->route('disciplines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discipline $discipline):View
    {
        return view('disciplines.show')->with('discipline', $discipline);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discipline $discipline):View
    {
        return view('disciplines.edit')->with('discipline', $discipline);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discipline $discipline)
    {
        $discipline->update($request->all());
        return redirect()->route('disciplines.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discipline $discipline)
    {
        //
    }
}
