<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WilayahController extends Controller
{
    public function index()
    {
        $wilayahs = Wilayah::all();
        return view('wilayah.index', [
            'wilayahs'   => $wilayahs
        ]);
    }
}
