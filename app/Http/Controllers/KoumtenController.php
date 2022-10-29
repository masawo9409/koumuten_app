<?php

namespace App\Http\Controllers;

// use App\Models\Construct;
use App\Models\Koumten;
use Illuminate\Http\Request;

class KoumtenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // 会社一覧を表示するアクション。ルーティング名はbutton1で呼び出される
    public function button1(Request $request)
    {
        $koumutens = Koumten::all();

        // 取得したデータの中心地を求める
        $latitude = $koumutens->average('latitude');
        $longitude = $koumutens->average('longitude');
        $zoom = 15;

        // constructのsinchikuカラムに数字が入力されている会社を一覧表示する。
        if ($request->has('sinchiku')) {
            $constructs = '新築';
            // Koumtenテーブルでsinchikuカラムが-でないレコードデータを取得。
            $koumutens = Koumten::where('sinchiku', '!=', 'null')->get();
            $latitude = $koumutens->average('latitude');
            $longitude = $koumutens->average('longitude');
            $zoom = 15;
            // Koumten.indexにsinchiku対応の会社のデータをkoumten.indexに表示
            return view('koumuten.index', compact('constructs', 'koumutens', 'latitude', 'longitude', 'zoom'));
        } elseif ($request->has('reform')) {
            $constructs = 'リフォーム';
            $koumutens = Koumten::where('reform', '!=', 'null')->get();
            $latitude = $koumutens->average('latitude');
            $longitude = $koumutens->average('longitude');
            $zoom = 15;
            return view('koumuten.index', compact('constructs', 'koumutens', 'latitude', 'longitude', 'zoom'));
        }
        // 修理一覧ページへ飛ぶ
        elseif ($request->has('repair')) {
            $constructs = '修繕';
            return view('koumuten.repair');
        } elseif ($request->has('repair_amamori')) {
            $constructs = '修繕(雨漏り)';
            $koumutens = Koumten::where('repair_amamori', '!=', 'null')->get();
            $latitude = $koumutens->average('latitude');
            $longitude = $koumutens->average('longitude');
            $zoom = 15;
            return view('koumuten.index', compact('constructs', 'koumutens', 'latitude', 'longitude', 'zoom'));
        } elseif ($request->has('repair_gaiheki')) {
            $constructs = '修繕(外壁修理)';
            $koumutens = Koumten::where('repair_gaiheki', '!=', 'null')->get();
            $latitude = $koumutens->average('latitude');
            $longitude = $koumutens->average('longitude');
            $zoom = 15;
            return view('koumuten.index', compact('constructs', 'koumutens', 'latitude', 'longitude', 'zoom'));
        } elseif ($request->has('repair_naisou')) {
            $constructs = '修繕(内装修理)';
            $koumutens = Koumten::where('repair_naisou', '!=', 'null')->get();
            $latitude = $koumutens->average('latitude');
            $longitude = $koumutens->average('longitude');
            $zoom = 15;
            return view('koumuten.index', compact('constructs', 'koumutens', 'latitude', 'longitude', 'zoom'));
        } else if ($request->has('repair_mizumore')) {
            $constructs = '修繕(水漏れ)';
            $koumutens = Koumten::where('repair_mizumore', '!=', 'null')->get();
            $latitude = $koumutens->average('latitude');
            $longitude = $koumutens->average('longitude');
            $zoom = 15;
            return view('koumuten.index', compact('constructs', 'koumutens', 'latitude', 'longitude', 'zoom'));
        } else if ($request->has('repair_aircon')) {
            $constructs = '修繕(エアコン修理)';
            $koumutens = Koumten::where('repair_aircon', '!=', 'null')->get();
            $latitude = $koumutens->average('latitude');
            $longitude = $koumutens->average('longitude');
            $zoom = 15;
            return view('koumuten.index', compact('constructs', 'koumutens', 'latitude', 'longitude', 'zoom'));
        }
    }

    public function button2()
    {
        return view('koumuten.repair');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 最初に表示したい座標(今回は東京タワー)
        $latitude = 38.988139;
        $longitude = 141.116581;
        $zoom = 15;
        return view('koumuten.create', compact('latitude', 'longitude', 'zoom'));
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

        // $construct = new Construct($request->all());
        // // constructテーブルのkoumten_idにuseridを入れているので、koumten_idがuserと一致してしまう
        // // $construct->koumten_id = $request->user()->id;
        // $construct->koumten_id = $request->id;
        // $construct->save();

        $koumten = $koumuten;

        return redirect()
            ->route('top', compact('koumten'))
            ->with('notice', 'コメントを登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function show(Koumten $koumten)
    {
        $latitude = $koumten->latitude;
        $longitude = $koumten->longitude;
        $zoom = 15;
        return view('koumuten.show', compact('koumten', 'latitude', 'longitude', 'zoom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function edit(Koumten $koumten)
    {
        $latitude = $koumten->latitude;
        $longitude = $koumten->longitude;
        $zoom = 15;

        return view('koumuten.edit', compact('koumten', 'latitude', 'longitude', 'zoom'));
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
        $koumten->fill($request->all());
        $koumten->save();

        $latitude = $koumten->latitude;
        $longitude = $koumten->longitude;
        $zoom = 15;

        return view('koumuten.show', compact('koumten', 'latitude', 'longitude', 'zoom'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Koumten  $koumten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Koumten $koumten)
    {
        $koumten->delete();
        return redirect()->route('top')
            ->with('notice', '記事を削除しました');
    }
}
