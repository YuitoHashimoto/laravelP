<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * 作品一覧を表示する
     *
     * @return view
     */
    public function showList() {
        $works = Work::all();

        return view('works',
            ['works' => $works]
        );
    }

    /**
     * 作品詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id) {
        $work = Work::find($id);

        // if (is_null($work)) {
        //     \Session::flash('err_msg', 'データがありません。');
        //     return redirect(route('works'));
        // }

        return view('single',
            ['work' => $work]
        );
    }

    /**
     * 作品登録画面を表示する
     *
     * @return view
     */
    public function showCreate() {
        return view('workForm');
    }

    /**
     * 作品登録する
     *
     * @return view
     */
    public function exeStore(Request $request) {
        // Work::create();
        dd($request->all());

        return redirect(route('works'));
    }
}
