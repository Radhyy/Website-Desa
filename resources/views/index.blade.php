@extends('layouts.main')

@section('content')
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        @foreach ($sliders as $key => $slider)
        <div class="carousel-item{{ $key === 0 ? ' active' : '' }}" style="background-image: url({{ asset('storage/' . $slider->img_slider) }});">
          <div class="carousel-container">
            <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">{{ $slider->judul }}</h2>
              <p class="animate__animated animate__fadeInUp">{{ $slider->deskripsi }}</p>
              <a href="{{ $slider->link_btn }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->

<!-- ======= Services Section ======= -->
<section id="services" class="services-modern">
  <div class="container" data-aos="fade-up">

    <div class="row g-4">
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <a href="/data-desa" class="service-card">
          <div class="service-icon">
            <i class="bi bi-bar-chart-line-fill"></i>
          </div>
          <h4 class="service-title">Statistik</h4>
          <p class="service-desc">Data dan statistik desa</p>
          <div class="service-arrow">
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <a href="/peta-desa" class="service-card">
          <div class="service-icon">
            <i class="bi bi-globe-asia-australia"></i>
          </div>
          <h4 class="service-title">Peta Desa</h4>
          <p class="service-desc">Peta wilayah desa</p>
          <div class="service-arrow">
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <a href="/umkm" class="service-card">
          <div class="service-icon">
            <i class="bi bi-shop"></i>
          </div>
          <h4 class="service-title">UMKM Desa</h4>
          <p class="service-desc">Usaha mikro warga desa</p>
          <div class="service-arrow">
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <a href="/kontak" class="service-card">
          <div class="service-icon">
            <i class="bi bi-telephone-forward"></i>
          </div>
          <h4 class="service-title">Pengaduan</h4>
          <p class="service-desc">Layanan pengaduan warga</p>
          <div class="service-arrow">
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>
      </div>
    </div>
    
  </div>
</section>

<!-- ======= Video Section ======= -->
<section id="services" class="services mx-4">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Video Profile</h2>
    </div>

    <div class="row">
      <div class="col-lg-10 mx-auto">
        <iframe width="100%" height="500" src="{{ $videoProfil->url_video }}" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>


<section class="berita-home-section section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Berita Terbaru</h2>
      <p>Informasi dan berita terkini dari desa</p>
    </div>

    <div class="row g-4">
      @foreach ($beritas as $berita)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <article class="berita-card">
                    <div class="berita-img">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid">
                        <div class="berita-category">
                            <span class="badge">{{ $berita->kategori->kategori ?? 'Umum' }}</span>
                        </div>
                    </div>
                    <div class="berita-content">
                        <div class="berita-meta">
                            <span class="berita-date">
                                <i class="bi bi-calendar3"></i> {{ $berita->created_at->format('d M Y') }}
                            </span>
                            <span class="berita-time">
                                <i class="bi bi-clock"></i> {{ $berita->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <h3 class="berita-title">
                            <a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a>
                        </h3>
                        <p class="berita-excerpt">{{ Str::limit($berita->excerpt, 100) }}</p>
                        <div class="berita-footer">
                            <a href="/berita/{{ $berita->slug }}" class="read-more">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-5" data-aos="fade-up">
      <a class="btn btn-primary btn-lihat-semua" href="/berita" role="button">
        <i class="bi bi-newspaper me-2"></i> Lihat Semua Berita
      </a>
    </div>
      
  </div>
</section>

<!-- ======= Pengumuman Section ======= -->
<section class="pengumuman-home-section">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Pengumuman Terbaru</h2>
      <p>Informasi dan pemberitahuan penting untuk warga desa</p>
    </div>

    <div class="row g-4">
      @foreach ($pengumumans as $pengumuman)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
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

    <div class="text-center mt-5" data-aos="fade-up">
      <a class="btn btn-primary btn-lihat-semua" href="/pengumuman" role="button">
        <i class="bi bi-megaphone me-2"></i> Lihat Semua Pengumuman
      </a>
    </div>
      
  </div>
</section>
@endsection