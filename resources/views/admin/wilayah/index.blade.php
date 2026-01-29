@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-header bg-primary">
            <div class="row align-items-center">
                <div class="col-6">
                    <h5 class="card-title fw-semibold text-white">Data Wilayah Desa</h5>
                </div>
                <div class="col-6 text-right">
                    <a href="/wilayah" type="button" class="btn btn-warning float-end" target="_blank">Live Preview</a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wilayah</th>
                                    <th>Kepala Wilayah</th>
                                    <th>Jumlah KK</th>
                                    <th>Jumlah Penduduk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($wilayahs as $index => $wilayah)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $wilayah->nama_wilayah }}</td>
                                    <td>{{ $wilayah->kepala_wilayah ?? '-' }}</td>
                                    <td>{{ number_format($wilayah->jumlah_kk) }}</td>
                                    <td>{{ number_format($wilayah->jumlah_penduduk) }}</td>
                                    <td>
                                        <a href="/admin/wilayah/{{ $wilayah->id }}/edit" class="btn btn-sm btn-warning">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data wilayah</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr class="table-info">
                                    <td colspan="3"><strong>Total</strong></td>
                                    <td><strong>{{ number_format($wilayahs->sum('jumlah_kk')) }}</strong></td>
                                    <td><strong>{{ number_format($wilayahs->sum('jumlah_penduduk')) }}</strong></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

@endsection