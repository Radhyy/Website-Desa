@extends('layouts.main')

@section('content')
    <section class="apbdes-section section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Anggaran Pendapatan dan Belanja Desa (APBDes)</h2>
                <p>Transparansi keuangan desa untuk kesejahteraan bersama</p>
            </div>

            <!-- Summary Cards -->
            <div class="row g-4 mb-5" data-aos="fade-up">
                @php
                    $totalPendapatan = $anggarans->where('jenis', 'Pendapatan')->sum('jumlah');
                    $totalBelanja = $anggarans->where('jenis', 'Belanja')->sum('jumlah');
                    $surplus = $totalPendapatan - $totalBelanja;
                @endphp
                
                <div class="col-lg-4 col-md-6">
                    <div class="apbdes-summary-card pendapatan">
                        <div class="icon">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <div class="content">
                            <h5>Total Pendapatan</h5>
                            <h3>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="apbdes-summary-card belanja">
                        <div class="icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <div class="content">
                            <h5>Total Belanja</h5>
                            <h3>Rp {{ number_format($totalBelanja, 0, ',', '.') }}</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="apbdes-summary-card {{ $surplus >= 0 ? 'surplus' : 'defisit' }}">
                        <div class="icon">
                            <i class="bi bi-graph-{{ $surplus >= 0 ? 'up' : 'down' }}-arrow"></i>
                        </div>
                        <div class="content">
                            <h5>{{ $surplus >= 0 ? 'Surplus' : 'Defisit' }}</h5>
                            <h3>Rp {{ number_format(abs($surplus), 0, ',', '.') }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pendapatan Section -->
            <div class="apbdes-table-section" data-aos="fade-up">
                <div class="table-header pendapatan">
                    <h4><i class="bi bi-cash-stack"></i> Pendapatan Desa</h4>
                </div>
                <div class="table-responsive">
                    <table class="table apbdes-table">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="30%">Kategori</th>
                                <th width="45%">Uraian</th>
                                <th width="20%" class="text-end">Jumlah (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $pendapatans = $anggarans->where('jenis', 'Pendapatan');
                                $groupedPendapatan = $pendapatans->groupBy('kategori');
                                $no = 1;
                            @endphp
                            @foreach($groupedPendapatan as $kategori => $items)
                                <tr class="kategori-row">
                                    <td colspan="4" class="kategori-header">
                                        <strong>{{ $kategori }}</strong>
                                    </td>
                                </tr>
                                @foreach($items as $item)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td></td>
                                        <td>{{ $item->uraian }}</td>
                                        <td class="text-end">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                                <tr class="subtotal-row">
                                    <td colspan="3" class="text-end"><strong>Subtotal {{ $kategori }}</strong></td>
                                    <td class="text-end"><strong>{{ number_format($items->sum('jumlah'), 0, ',', '.') }}</strong></td>
                                </tr>
                            @endforeach
                            <tr class="total-row">
                                <td colspan="3" class="text-end"><strong>TOTAL PENDAPATAN</strong></td>
                                <td class="text-end"><strong>{{ number_format($totalPendapatan, 0, ',', '.') }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Belanja Section -->
            <div class="apbdes-table-section mt-5" data-aos="fade-up">
                <div class="table-header belanja">
                    <h4><i class="bi bi-cart-check"></i> Belanja Desa</h4>
                </div>
                <div class="table-responsive">
                    <table class="table apbdes-table">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="30%">Kategori</th>
                                <th width="45%">Uraian</th>
                                <th width="20%" class="text-end">Jumlah (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $belanjas = $anggarans->where('jenis', 'Belanja');
                                $groupedBelanja = $belanjas->groupBy('kategori');
                                $no = 1;
                            @endphp
                            @foreach($groupedBelanja as $kategori => $items)
                                <tr class="kategori-row">
                                    <td colspan="4" class="kategori-header">
                                        <strong>{{ $kategori }}</strong>
                                    </td>
                                </tr>
                                @foreach($items as $item)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td></td>
                                        <td>{{ $item->uraian }}</td>
                                        <td class="text-end">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                                    </tr>
                                @endforeach
                                <tr class="subtotal-row">
                                    <td colspan="3" class="text-end"><strong>Subtotal {{ $kategori }}</strong></td>
                                    <td class="text-end"><strong>{{ number_format($items->sum('jumlah'), 0, ',', '.') }}</strong></td>
                                </tr>
                            @endforeach
                            <tr class="total-row">
                                <td colspan="3" class="text-end"><strong>TOTAL BELANJA</strong></td>
                                <td class="text-end"><strong>{{ number_format($totalBelanja, 0, ',', '.') }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection
