@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-header bg-primary">
            <div class="row align-items-center">
                <div class="col-6">
                    <h5 class="card-title fw-semibold text-white">Edit Data Wilayah</h5>
                </div>
                <div class="col-6 text-right">
                    <a href="/admin/wilayah" type="button" class="btn btn-secondary float-end">Kembali</a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <div class="row">
               <form method="POST" action="/admin/wilayah/{{ $wilayah->id }}">
                    @method('put')
                    @csrf

                    <div class="col">
                        <div class="mb-3">
                            <label for="nama_wilayah" class="form-label">Nama Wilayah <span style="color: red">*</span></label>
                            <input type="text" class="form-control" name="nama_wilayah" id="nama_wilayah" value="{{ old('nama_wilayah', $wilayah->nama_wilayah) }}" placeholder="Contoh: RW 01">
                            @error('nama_wilayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kepala_wilayah" class="form-label">Kepala Wilayah</label>
                            <input type="text" class="form-control" name="kepala_wilayah" id="kepala_wilayah" value="{{ old('kepala_wilayah', $wilayah->kepala_wilayah) }}" placeholder="Contoh: Bapak Ahmad">
                            @error('kepala_wilayah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_kk" class="form-label">Jumlah KK <span style="color: red">*</span></label>
                            <input type="number" class="form-control" name="jumlah_kk" id="jumlah_kk" value="{{ old('jumlah_kk', $wilayah->jumlah_kk) }}" min="0">
                            @error('jumlah_kk')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_penduduk" class="form-label">Jumlah Penduduk <span style="color: red">*</span></label>
                            <input type="number" class="form-control" name="jumlah_penduduk" id="jumlah_penduduk" value="{{ old('jumlah_penduduk', $wilayah->jumlah_penduduk) }}" min="0">
                            @error('jumlah_penduduk')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary m-1 float-end">Update</button>
                    <a href="/admin/wilayah" class="btn btn-secondary m-1 float-end">Batal</a>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection