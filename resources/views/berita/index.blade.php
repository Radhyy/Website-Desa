@extends('layouts.main')

@section('content')
<section class="berita-section section-bg">
    <div class="container">
  
      <div class="section-title" data-aos="fade-up">
        <h2>Berita Desa</h2>
        <p>Informasi terkini dan berita terbaru dari desa</p>
      </div>
  
      <div class="row g-4">
        @forelse ($beritas as $berita)
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
                            <span class="berita-author">
                                <i class="bi bi-person"></i> {{ $berita->user->name ?? 'Admin' }}
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
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center" role="alert">
                    <i class="bi bi-info-circle"></i> Belum ada berita yang dipublikasikan
                </div>
            </div>
        @endforelse
      </div>

      <div class="berita-pagination mt-5" data-aos="fade-up">
        {{ $beritas->links() }}
      </div>

    </div>
</section>
@endsection