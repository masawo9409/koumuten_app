<?php

namespace App\Http\Controllers;

use App\Models\Koumten;
use Illuminate\Http\Request;

class KoumtenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function show(Koumten $koumten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function edit(Koumten $koumten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Koumten $koumten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Koumten $koumten)
    {
        //
    }
}
