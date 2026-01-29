@extends('admin.layouts.main')

@section('content')
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-header bg-primary">
            <div class="row align-items-center">
                <div class="col-6">
                    <h5 class="card-title fw-semibold text-white">videoProfil</h5>
                </div>
                <div class="col-6 text-right">
                    <a href="/videoProfil" type="button" class="btn btn-warning float-end me-2" target="_blank">Live Preview</a>
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
                <div class="col-lg-8">
                    <iframe width="100%" height="400" src="{{ $videoProfile->url_video }}" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <form method="POST" action="/admin/video-profile/{{ $videoProfile->id }}">
                        @method('put')
                        @csrf
    
                        <div class="col">
                            <div class="mb-3">
                                <label for="url_video" class="form-label">URL Video YouTube <span style="color: red">*</span></label>
                                <input type="text" class="form-control" name="url_video" id="url_video" placeholder="https://youtu.be/VIDEO_ID atau https://www.youtube.com/watch?v=VIDEO_ID" value="{{ old('url_video', $videoProfile->url_video) }}">
                                <i><small>Masukkan URL YouTube dalam format apapun, akan otomatis dikonversi ke format embed</small></i>
                                @error('url_video')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-1 float-end">Update</button>
                   </form>
                </div>
            </div>
              
        </div>

      </div>
    </div>
</div>
@endsection