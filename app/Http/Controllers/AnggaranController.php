<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index()
    {
        return view('apbdesa.index', [
            'anggarans'     => Anggaran::with('user')->orderBy('kategori', 'ASC')->get()
        ]);
    }

    public function detail($slug)
    {
        $anggaran = Anggaran::with('user')->where('slug', $slug)->first();
        return view('apbdesa.detail', [
            'anggaran'  => $anggaran
        ]);
    }
}
