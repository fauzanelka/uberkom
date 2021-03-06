<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    /**
     * Show UI
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('index');
    }
}
