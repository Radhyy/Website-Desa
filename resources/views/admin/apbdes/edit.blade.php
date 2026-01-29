@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-header bg-primary">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title fw-semibold text-white">Edit Data APBDes</h5>
                        </div>
                        <div class="col-6 text-right">
                            <a href="/admin/apbdes" type="button" class="btn btn-warning float-end">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="/admin/apbdes/{{ $anggaran->id }}">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="tahun" class="form-label">Tahun Anggaran<span style="color: red">*</span></label>
                                        <input type="number" class="form-control" name="tahun" id="tahun"
                                            value="{{ old('tahun', $anggaran->tahun) }}" min="2020" max="2100">
                                        @error('tahun')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="jenis" class="form-label">Jenis<span style="color: red">*</span></label>
                                        <select class="form-select" name="jenis" id="jenis">
                                            <option value="">Pilih Jenis</option>
                                            <option value="Pendapatan" {{ old('jenis', $anggaran->jenis) == 'Pendapatan' ? 'selected' : '' }}>Pendapatan</option>
                                            <option value="Belanja" {{ old('jenis', $anggaran->jenis) == 'Belanja' ? 'selected' : '' }}>Belanja</option>
                                        </select>
                                        @error('jenis')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori<span style="color: red">*</span></label>
                                <input type="text" class="form-control" name="kategori" id="kategori"
                                    value="{{ old('kategori', $anggaran->kategori) }}" placeholder="Contoh: Pendapatan Asli Desa">
                                @error('kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="uraian" class="form-label">Uraian<span style="color: red">*</span></label>
                                <textarea class="form-control" name="uraian" id="uraian" rows="3" placeholder="Contoh: Hasil Usaha Desa">{{ old('uraian', $anggaran->uraian) }}</textarea>
                                @error('uraian')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah (Rp)<span style="color: red">*</span></label>
                                <input type="number" class="form-control" name="jumlah" id="jumlah"
                                    value="{{ old('jumlah', $anggaran->jumlah) }}" min="0" step="1" placeholder="Contoh: 50000000">
                                @error('jumlah')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">Masukkan nominal tanpa titik atau koma</small>
                            </div>

                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
