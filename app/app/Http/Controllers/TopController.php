<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function topAction()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        $result = DB::select('select * from asset');

        foreach ($result as $cur_result) {
            echo '日付：' . $cur_result->year_mnth . "\n";
            echo '元本：' . $cur_result->principal . "\n";
            echo '資産：' . $cur_result->asset . "\n";
        }


        return view('top', compact('hello', 'hello_array'));
    }
}
