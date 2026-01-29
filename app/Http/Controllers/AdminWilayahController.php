<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminWilayahController extends Controller
{
    public function index()
    {
        $wilayahs = Wilayah::all();
        return view('admin.wilayah.index', [
            'wilayahs'   => $wilayahs,
        ]);
    }

    public function edit($id)
    {
        $wilayah = Wilayah::find($id);
        return view('admin.wilayah.edit', [
            'wilayah'   => $wilayah
        ]);
    }

    public function update(Request $request, $id)
    {
        $wilayah = Wilayah::find($id);
        $validator = Validator::make($request->all(), [
            'nama_wilayah'      => 'required',
            'kepala_wilayah'    => 'nullable',
            'jumlah_kk'         => 'required|numeric|min:0',
            'jumlah_penduduk'   => 'required|numeric|min:0'
        ], [
            'nama_wilayah.required'     => 'Nama wilayah wajib diisi!',
            'jumlah_kk.required'        => 'Jumlah KK wajib diisi!',
            'jumlah_kk.numeric'         => 'Jumlah KK harus berupa angka!',
            'jumlah_penduduk.required'  => 'Jumlah penduduk wajib diisi!',
            'jumlah_penduduk.numeric'   => 'Jumlah penduduk harus berupa angka!'
        ]);

        if ($validator->fails()) {
            return redirect("/admin/wilayah/{$wilayah->id}/edit")
                ->withErrors($validator)
                ->withInput();
        }

        $wilayah->update([
            'nama_wilayah'      => $request->nama_wilayah,
            'kepala_wilayah'    => $request->kepala_wilayah,
            'jumlah_kk'         => $request->jumlah_kk,
            'jumlah_penduduk'   => $request->jumlah_penduduk,
        ]);

        return redirect('/admin/wilayah')->with('success', 'Berhasil memperbarui data wilayah');
    }


}
