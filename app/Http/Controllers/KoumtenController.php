<?php

namespace App\Http\Controllers;

use App\Models\Construct;
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

    public function button1(Request $request)
    {
        $koumutens = Koumten::all();
        // constructのsinchikuカラムに数字が入力されている会社を一覧表示する。
        if ($request->has('sinchiku')) {
            $constructs = '新築';
            $koumutens = Construct::where('sinchiku', '!=', '-')->get();
            return view('koumuten.index', compact('constructs', 'koumutens'));
        } else if ($request->has('reform')) {
            $constructs = 'リフォーム';
            return view('koumuten.index', compact('construct', 'koumutens'));
        } else if ($request->has('repair')) {
            $constructs = '修繕';
            return view('koumuten.index', compact('construct', 'koumutens'));
        }
    }

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
        return view('koumuten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Koumten $koumten)
    {
        $koumuten = new Koumten($request->all());
        $koumuten->user_id = $request->user()->id;
        $koumuten->save();

        $construct = new Construct($request->all());
        // constructテーブルのkoumten_idにuseridを入れているので、koumten_idがuserと一致してしまう
        // $construct->koumten_id = $request->user()->id;
        $construct->koumten_id = $request->id;
        $construct->save();

        $koumten = $koumuten;

        return redirect()
            ->route('koumtens.show', compact('koumten'))
            ->with('notice', 'コメントを登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function show(Koumten $koumten, Construct $construct)
    {

        $constructs = Construct::find($koumten);
        return view('koumuten.show', compact('koumten'));
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
