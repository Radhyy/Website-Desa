<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\VideoProfil;
use App\Models\Announcement;

class BerandaController extends Controller
{
    public function index()
    {
        return view('/index', [
            'sliders'       => Slider::all(),
            'beritas'       => Berita::where('status_id', 2)->latest()->take(3)->get(),
            'videoProfil'   => VideoProfil::first(),
            'pengumumans'   => Announcement::latest()->take(3)->get()
        ]);
    }
}
