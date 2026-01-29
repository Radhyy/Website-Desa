@extends('layouts.main')

@section('content')
    <section class="gallery-section section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Galeri Desa</h2>
                <p>Dokumentasi kegiatan dan keindahan Desa {{ $nm_desa }}</p>
            </div>

            <div class="row g-4">
                @foreach ($galleries as $index => $gallery)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal{{ $gallery->id }}">
                            <div class="gallery-img-wrapper">
                                <img src="{{ asset('storage/' . $gallery->gambar) }}" alt="{{ $gallery->judul }}" class="gallery-img">
                                <div class="gallery-overlay">
                                    <div class="gallery-overlay-content">
                                        <i class="bi bi-zoom-in"></i>
                                        <p class="gallery-caption">{{ Str::limit($gallery->deskripsi ?? $gallery->judul, 50) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-info">
                                <h5 class="gallery-title">{{ $gallery->judul }}</h5>
                                <span class="gallery-date">
                                    <i class="bi bi-calendar3"></i> {{ $gallery->created_at->format('d M Y') }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="galleryModal{{ $gallery->id }}" tabindex="-1" aria-labelledby="galleryModalLabel{{ $gallery->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="galleryModalLabel{{ $gallery->id }}">{{ $gallery->judul }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img src="{{ asset('storage/' . $gallery->gambar) }}" alt="{{ $gallery->judul }}" class="img-fluid rounded">
                                    @if($gallery->deskripsi)
                                        <p class="mt-3">{{ $gallery->deskripsi }}</p>
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <small class="text-muted">
                                        <i class="bi bi-calendar3"></i> Diunggah pada {{ $gallery->created_at->format('d F Y') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="paginate my-5 text-center" data-aos="fade-up">
                {{ $galleries->links() }}
            </div>
        </div>
    </section>
@endsection
