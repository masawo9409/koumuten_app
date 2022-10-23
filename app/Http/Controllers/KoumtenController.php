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
    // 会社一覧を表示するコントローラーにしたい。
    // 新築、リフォーム、修理系(修理の種類)で変数を分けてその都度表示を変えたい。
    public function index(Request $request)
    {
        $company = Koumten::all();
        switch ($request) {
            case 'sinchiku':
                return view('koumuten.index', ['company' => $company]);
                break;
            case 'reform':
                return view('koumuten.index', ['company' => $company]);
                break;
            default:
                return view('koumuten.index', ['company' => $company]);
                break;
        }
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
