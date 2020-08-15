@extends('master')

@push('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')


<div class="container-fluid">
    <h2 class="mt-4">Tambah Pertanyaan</h2>
    <hr class="mt-0 mb-4">

    <div class="container bg-linear box-shadows box-radius pb-4">
        <form role="form" action="/question" method="POST">
            @csrf
            <div class="card-body pb-0">

                <div class="form-group mb-4">
                    <label for="title" class="text-white">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ old('title') }}">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="tagsSelect" class="text-white">Tags</label>
                    <select class="form-control" name="tags[]" id="tagsSelect" multiple="multiple" aria-placeholder="Pilih Tag pertanyaan">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"> {{ $tag->name }} </option>
                        @endforeach
                    </select>
                    @error('tags')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="content" class="text-white">Deskripsi</label>
                    <textarea class="form-control" rows="3" name="content">{!! old('content') !!}</textarea>
                    @error('content')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            
            <div class="card-footer d-flex justify-content-center">
                <div class="btn-group">
                    <button type="submit"  class="btn btn-success"">
                        Tambah Pertanyaan                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                    </button>
                </div>
            </div>
        </form>
    </div>           
</div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tagsSelect').select2();
        });
    </script>

@endpush