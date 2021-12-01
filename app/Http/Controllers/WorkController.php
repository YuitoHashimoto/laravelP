<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * 作品一覧を表示する
     *
     * @return view
     */
    public function showList() {
        return view('works');
    }
}
