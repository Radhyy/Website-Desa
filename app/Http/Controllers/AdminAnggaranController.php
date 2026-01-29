<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Anggaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminAnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.apbdes.index', [
            'anggarans'     => Anggaran::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.apbdes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tahun'         => 'required|numeric',
            'jenis'         => 'required|in:Pendapatan,Belanja',
            'kategori'      => 'required',
            'uraian'        => 'required',
            'jumlah'        => 'required|numeric|min:0'
        ], [
            'tahun.required'        => "Tahun wajib di isi !",
            'tahun.numeric'         => "Tahun harus berupa angka !",
            'jenis.required'        => 'Jenis wajib di isi !',
            'jenis.in'              => 'Jenis harus Pendapatan atau Belanja !',
            'kategori.required'     => 'Kategori wajib di isi !',
            'uraian.required'       => 'Uraian wajib di isi !',
            'jumlah.required'       => 'Jumlah wajib di isi !',
            'jumlah.numeric'        => 'Jumlah harus berupa angka !',
            'jumlah.min'            => 'Jumlah tidak boleh negatif !',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Anggaran::create([
            'tahun'         => $request->tahun,
            'jenis'         => $request->jenis,
            'kategori'      => $request->kategori,
            'uraian'        => $request->uraian,
            'jumlah'        => $request->jumlah,
            'user_id'       => auth()->user()->id
        ]);
        return redirect('/admin/apbdes')->with('success', 'Berhasil menambahkan data anggaran');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggaran = Anggaran::find($id);
        return view('admin.apbdes.edit', [
            'anggaran'  => $anggaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggaran = Anggaran::find($id);
        $validator = Validator::make($request->all(), [
            'tahun'         => 'required|numeric',
            'jenis'         => 'required|in:Pendapatan,Belanja',
            'kategori'      => 'required',
            'uraian'        => 'required',
            'jumlah'        => 'required|numeric|min:0'
        ], [
            'tahun.required'        => "Tahun wajib di isi !",
            'tahun.numeric'         => "Tahun harus berupa angka !",
            'jenis.required'        => 'Jenis wajib di isi !',
            'jenis.in'              => 'Jenis harus Pendapatan atau Belanja !',
            'kategori.required'     => 'Kategori wajib di isi !',
            'uraian.required'       => 'Uraian wajib di isi !',
            'jumlah.required'       => 'Jumlah wajib di isi !',
            'jumlah.numeric'        => 'Jumlah harus berupa angka !',
            'jumlah.min'            => 'Jumlah tidak boleh negatif !',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $anggaran->update([
            'tahun'         => $request->tahun,
            'jenis'         => $request->jenis,
            'kategori'      => $request->kategori,
            'uraian'        => $request->uraian,
            'jumlah'        => $request->jumlah,
        ]);

        return redirect('/admin/apbdes')->with('success', 'Berhasil memperbarui data anggaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggaran = Anggaran::find($id);
        $anggaran->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data anggaran !');
    }
}
