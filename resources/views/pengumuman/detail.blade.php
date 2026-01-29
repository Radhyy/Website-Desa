@extends('layouts.main')

@section('content')
    <section class="counts section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" data-aos="fade-down">
                        <ol class="breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door"></i> Beranda</a></li>
                            <li class="breadcrumb-item"><a href="/pengumuman">Pengumuman</a></li>
                            <li class="breadcrumb-item active">{{ Str::limit($pengumuman->judul, 40) }}</li>
                        </ol>
                    </nav>

                    <!-- Main Content -->
                    <div class="pengumuman-detail-card" data-aos="fade-up">
                        <!-- Header -->
                        <div class="pengumuman-detail-header">
                            <div class="pengumuman-detail-icon">
                                <i class="bi bi-megaphone-fill"></i>
                            </div>
                            <h1 class="pengumuman-detail-title">{{ $pengumuman->judul }}</h1>
                        </div>

                        <!-- Meta Info -->
                        <div class="pengumuman-detail-meta">
                            <div class="meta-group">
                                <span class="meta-icon"><i class="bi bi-calendar3"></i></span>
                                <span>{{ $pengumuman->created_at->format('d F Y') }}</span>
                            </div>
                            <div class="meta-group">
                                <span class="meta-icon"><i class="bi bi-person-circle"></i></span>
                                <span>{{ $pengumuman->user->name ?? 'Admin' }}</span>
                            </div>
                            <div class="meta-group">
                                <span class="meta-icon"><i class="bi bi-clock-history"></i></span>
                                <span>{{ $pengumuman->created_at->diffForHumans() }}</span>
                            </div>
                        </div>

                        <!-- Period Badge -->
                        @if($pengumuman->tanggal_mulai && $pengumuman->tanggal_selesai)
                        <div class="pengumuman-period-banner">
                            <div class="period-icon">
                                <i class="bi bi-calendar-range"></i>
                            </div>
                            <div class="period-info">
                                <strong>Periode Berlaku</strong>
                                <p>{{ \Carbon\Carbon::parse($pengumuman->tanggal_mulai)->format('d F Y') }} - {{ \Carbon\Carbon::parse($pengumuman->tanggal_selesai)->format('d F Y') }}</p>
                            </div>
                            <div class="period-status">
                                @if(\Carbon\Carbon::parse($pengumuman->tanggal_selesai)->isFuture())
                                    <span class="status-badge active"><i class="bi bi-check-circle"></i> Masih Berlaku</span>
                                @else
                                    <span class="status-badge expired"><i class="bi bi-x-circle"></i> Sudah Berakhir</span>
                                @endif
                            </div>
                        </div>
                        @endif

                        <!-- Content -->
                        <div class="pengumuman-detail-content">
                            {!! $pengumuman->konten !!}
                        </div>

                        <!-- Back Button -->
                        <div class="pengumuman-detail-footer">
                            <a href="/pengumuman" class="btn-kembali">
                                <i class="bi bi-arrow-left"></i> Kembali ke Daftar Pengumuman
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
