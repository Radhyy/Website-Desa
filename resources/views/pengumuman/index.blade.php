@extends('layouts.main')

@section('content')
    <section class="counts section-bg">
        <div class="section-title" data-aos="fade-up">
            <h2>Pengumuman Desa</h2>
            <p>Informasi dan pemberitahuan penting untuk warga desa</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($pengumumans as $pengumuman)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="pengumuman-card">
                            <div class="pengumuman-header">
                                <div class="pengumuman-icon">
                                    <i class="bi bi-megaphone"></i>
                                </div>
                                <div class="pengumuman-badge">
                                    @if($pengumuman->tanggal_selesai && \Carbon\Carbon::parse($pengumuman->tanggal_selesai)->isFuture())
                                        <span class="badge-active">Aktif</span>
                                    @else
                                        <span class="badge-expired">Berakhir</span>
                                    @endif
                                </div>
                            </div>
                            <div class="pengumuman-body">
                                <h5 class="pengumuman-title">{{ $pengumuman->judul }}</h5>
                                <div class="pengumuman-meta">
                                    <span class="meta-item">
                                        <i class="bi bi-calendar3"></i>
                                        {{ $pengumuman->created_at->format('d M Y') }}
                                    </span>
                                    <span class="meta-item">
                                        <i class="bi bi-clock"></i>
                                        {{ $pengumuman->created_at->diffForHumans() }}
                                    </span>
                                </div>
                                <div class="pengumuman-excerpt">
                                    {!! $pengumuman->excerpt !!}
                                </div>
                                @if($pengumuman->tanggal_mulai && $pengumuman->tanggal_selesai)
                                <div class="pengumuman-period">
                                    <i class="bi bi-calendar-range"></i>
                                    <small>{{ \Carbon\Carbon::parse($pengumuman->tanggal_mulai)->format('d M') }} - {{ \Carbon\Carbon::parse($pengumuman->tanggal_selesai)->format('d M Y') }}</small>
                                </div>
                                @endif
                                <a href="/pengumuman/{{ $pengumuman->slug }}" class="btn-selengkapnya">
                                    Selengkapnya <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="paginate my-5" style="text-align: center">
                {{ $pengumumans->links() }}
            </div>
        </div>
    </section>
@endsection
