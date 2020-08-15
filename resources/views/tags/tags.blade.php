@extends('master')

@section('content')

<div class="container-fluid">
    <h2 class="mt-4">Tags</h2>
    <hr class="mt-0 mb-4">
    <div class="row">

        @foreach ($tags as $tag)
            <div class="col-xl-3 col-md-6">
                <div class="card border-none text-white mb-4">
                    <div class="card-custom box-shadows bg-linear">
                        <div class="title-card text-center">
                            {{ $tag->name }}
                        </div>
                        <hr class="m-0">
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="/tag/{{ $tag->id }}">{{ $tag->questions->count() }} Pertanyaan</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>            
</div>

@endsection

