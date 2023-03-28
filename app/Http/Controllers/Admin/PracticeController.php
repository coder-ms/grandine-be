<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePracticeRequest;
use App\Http\Requests\UpdatePracticeRequest;
use App\Models\Practice;

class PracticeController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $practices = Practice::all();

        return view('admin.practices.index', compact('practices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.practices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StorePracticeRequest $request)
    {
        $data = $request->validated();
        $slug = Practice::generateSlug($request->plate);
        $data['slug'] = $slug;
        $new_practice = Practice::create($data);
        return redirect()->route('admin.practices.show', $new_practice->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Practice $practice)
    {
        return view('admin.practices.show', compact('practice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Practice $practice)
    {
        return view('admin.practices.edit', compact('practice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(UpdatePracticeRequest $request, Practice $practice)
    {
        $data = $request->validated();
        $slug = Practice::generateSlug($request->plate);
        $data['slug'] = $slug;

        $practice->update($data);
        return redirect()->route('admin.practices.index')->with('message', "$practice->title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Practice  $practice
     *
     */
    public function destroy(Practice $practice)
    {
        $practice->delete();
        return redirect()->route('admin.practices.index')->with('message', "$practice->title deleted successfully");
    }
}