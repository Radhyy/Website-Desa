@extends('layouts.main')

@section('content')
<section class="counts section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Visi & Misi</h2>
        </div>
  
        <div class="row">
            <div class="col-lg-10 mx-auto p-3">
                <div class="visi-misi">
                    <div class="visi mb-4">
                        <h4 class="mb-3">Visi</h4>
                        <div class="content">
                            {!! $visiMisi->visi !!}
                        </div>
                    </div>
                    <div class="misi mb-4">
                        <h4 class="mb-3">Misi</h4>
                        <div class="content">
                            {!! $visiMisi->misi !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
