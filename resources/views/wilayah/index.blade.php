@extends('layouts.main')

@section('content')
<section class="counts section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Data Wilayah Desa</h2>
            <p>Informasi pembagian wilayah dan jumlah penduduk per wilayah</p>
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Wilayah</th>
                                <th>Kepala Wilayah</th>
                                <th>Jumlah KK</th>
                                <th>Jumlah Penduduk</th>
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
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data wilayah</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr class="table-info">
                                <td colspan="3"><strong>Total</strong></td>
                                <td><strong>{{ number_format($wilayahs->sum('jumlah_kk')) }}</strong></td>
                                <td><strong>{{ number_format($wilayahs->sum('jumlah_penduduk')) }}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
