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

        if (is_null($work)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('works'));
        }

        return view('single',
            ['work' => $work]
        );
    }
}
