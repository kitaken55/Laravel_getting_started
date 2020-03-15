<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; //Viewを使うにはこれを固定で入れなければならない。

class MathController extends Controller
{
    //足し算を行う

    public function sum($x, $y) {
        $sum = $x + $y;

        // vuewはartisanコマンドだけではダメなので何かをuseしなければならない。
        return View::make('sum', ['x' => $x, 'y'=>$y, 'sum'=>$sum]);
    }
}
