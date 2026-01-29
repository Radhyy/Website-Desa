<?php

namespace App\Http\Controllers;

use App\Models\Peta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetaDesaController extends Controller
{
    public function index()
    {
        $petaDesa = Peta::first();
        
        // Jika belum ada data, buat data default
        if (!$petaDesa) {
            $petaDesa = Peta::create([
                'judul' => 'Peta Lokasi Desa',
                'alamat' => 'Desa Watu Pari, Kecamatan Komba Utara, Kabupaten Manggarai Timur, Nusa Tenggara Timur'
            ]);
        }
        
        return view('peta-desa.index', [
            'petaDesa'     => $petaDesa
        ]);
    }
}
