@extends('master')

@section('content')

<div class="container-fluid">
    <h2 class="mt-4">Detail Pertanyaan</h2>
    <hr class="mt-0 mb-4">

    <div class="container bg-linear box-shadows box-radius pb-4 pt-4">

        <div class="card mb-3 bg-transparent-custom">
            <div class="row no-gutters">
                <div class="col-2 text-center obj-center-column">
                    <div class="" style="font-size: 46px;">
                        <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Up-Vote">
                            <i class="fas fa-arrow-alt-circle-up"></i>
                        </a>
                    </div>

                    <h4 class="m-0 text-white">12</h4>

                    <div class="" style="font-size: 46px;">
                        <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Down-Vote">
                            <i class="fas fa-arrow-alt-circle-down"></i>
                        </a>
                    </div>                    
                </div>
                <div class="col-10">
                    <div class="card-body pl-0">
                        <h3 class="card-title text-justify text-white"><b>
                            {{ $question->title }}
                        </h3></b>
                        <p class="card-text text-justify text-white">{{ $question->content }}</p>
                        <div class="footer-question d-flex">
                            <div class="footquest-left">
                                @foreach ($question->tags as $tag)
                                <button type="button" class="btn btn-primary btn-sm">
                                    {{ $tag->name }}
                                </button>
                                @endforeach
                            </div>

                            <div class="footquest-right ml-auto text-white"><span>Oleh: &nbsp;</span>
                                <a class="text-white" href="#">
                                    <span> {{ $question->user->name }} </span>
                                </a>
                            </div>
                        </div>

                        <div class="footer-question d-flex">
                            <div class="footquest-right ml-auto">
                                <div class="text-white font-italic" href="#" style="font-size: 16px;">
                                    <span>Dibuat:
                                        {{ $question->created_at->diffForHumans() }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><br>
    
    <div class="container bg-linear box-shadows box-radius pb-4 pt-4">
        <div class="card mb-3 bg-transparent-custom">
            <form role="form" action="/question/{{ $question->id }}/answer" method="POST">
                @csrf
                <div class="card-body pb-2">
    
                    <div class="form-group px-4 m-0">
                        <h5 class="text-white text-center m-0"><b>Jawaban Anda</b></h5>
                        <hr class="m-0 mt-2 mb-4" style="border-top: 3px solid #fff !important;">
                        <textarea class="form-control" id="content" name="content" rows="3" placeholder="Jawaban Anda">
                            {{ old('content') }}
                        </textarea>
                        @error('content')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                
                <div class="card-footer d-flex justify-content-center pt-0">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success"">
                            Tambah Jawaban                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="container bg-transparent-custom pt-3">
            <h5 class="text-white text-center m-0"><b>Jawaban Pengguna Lain</b></h5>
            <hr class="m-0 mt-2 mb-4" style="border-top: 3px solid #fff !important;">
            <div class="table-responsive" style="width: 100%">
                <table class="table text-white" id="question-jawaban">
                    <thead class="d-none">
                        <tr>
                        <th scope="col" width="40">#</th>
                        <th scope="col">First</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($question->answers as $answer)
                            <tr class="bg-sidebar box-shadows-kotak text-white mb-3">
                                <td class="text-center d-block obj-center-column" scope="row" style="font-size: 0.6rem;">
                                    <div class="" style="font-size: 1.6rem;">
                                        <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Up-Vote">
                                            <i class="fas fa-arrow-alt-circle-up"></i>
                                        </a>
                                    </div>
                
                                    <p class="m-0 text-white"style="font-size: 1.4rem;">
                                        1
                                    </p>
                
                                    <div class="" style="font-size: 1.6rem;">
                                        <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Down-Vote">
                                            <i class="fas fa-arrow-alt-circle-down"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="pt-4">                            
                                    <span class="text-justify">
                                        {{ $answer->content }}
                                    </span>
                                    <hr class="mt-2 mb-1">
            
                                    <div class="footer-question d-flex" style="font-size: 0.7rem;">    
                                        <div class="footquest-right-down ml-auto font-italic">
                                            <span>Dibuat: &nbsp;</span>
                                            <a class="text-white" href="#">
                                                <span>{{ $answer->user->name }}</span>                                        
                                            </a>
                                            &nbsp;|&nbsp;|&nbsp;
                                            <span>{{ $answer->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    {{-- <form role="form" action="/pertanyaan" method="POST">
                                        @csrf
                                        <div class="card-body pb-0">
                            
                                            <div class="form-group mb-4">
                                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Komentari jawaban ini">
                                            </div>
                                        </div>
                                        
                                        <div class="card-footer d-flex justify-content-center p-0">
                                            <div class="btn-group">
                                                <a href="" type="button" class="btn btn-success btn-sm">
                                                    Tambah Komentar                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                                                </a>
                                            </div>
                                        </div>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><br>

    <div class="container bg-linear box-shadows box-radius pb-4 pt-4">
        <h4 class="text-white text-center m-0"><b>Komentar</b></h4>
        <hr class="m-0 mt-2 mb-4" style="border-top: 3px solid #fff !important;">



        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">

                <div class="table-responsive">
                    <table class="table text-white" id="question-detail">
                        <thead class="d-none">
                            <tr>
                            <th scope="col" width="40">#</th>
                            <th scope="col">First</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($question->comments as $comment)
                                <tr class="bg-transparent-custom box-shadows-kotak text-white mb-3">
                                    <td class="text-center d-block obj-center-column" scope="row" style="font-size: 0.6rem;">
                                        <div class="" style="font-size: 1.2rem;">
                                            <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Up-Vote">
                                                <i class="fas fa-arrow-alt-circle-up"></i>
                                            </a>
                                        </div>
                    
                                        <p class="m-0 text-white"style="font-size: 1rem;">
                                            1
                                        </p>
                    
                                        <div class="" style="font-size: 1.2rem;">
                                            <a class="text-white" href="#" data-toggle="tooltip" data-placement="top" title="Down-Vote">
                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>                            
                                        <span class="text-justify" style="font-size: 0.8rem;">
                                            {{ $comment->content  }}
                                        </span>
                                        <hr class="mt-2 mb-1">
                
                                        <div class="footer-question d-flex" style="font-size: 0.7rem;">    
                                            <div class="footquest-right-down ml-auto font-italic">
                                                <span>Dibuat: &nbsp;</span>
                                                <a class="text-white" href="#">
                                                    <span>{{ $comment->user->name  }}</span>                                        
                                                </a>
                                                &nbsp;|&nbsp;|&nbsp;
                                                <span>{{ $comment->created_at->diffForHumans()  }}</span>
                                            </div>
                                        </div>
                
                                    </td>
                                </tr> 
                            @endforeach                   
                        </tbody>
                    </table>
                </div>
                <hr class="m-0 mt-5 mb-2" style="border-top: 3px solid #fff !important;">
        
                <form role="form" action="/question/{{ $question->id }}/comment" method="POST">
                    @csrf
                    <div class="card-body pb-0">
                        <div class="form-group mb-4">
                            <input type="text" class="form-control" id="content" name="content" placeholder="Tambah Komentar">
                            @error('content')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    
                    <div class="card-footer d-flex justify-content-center p-0 mb-3">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success btn-sm">
                                Tambah Komentar                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
                            </button>
                        </div>
                    </div>
                </form>
                <hr class="m-0 mt-2 mb-4" style="border-top: 3px solid #fff !important;">
            </div>
            <nav class="navbar navbar-dark obj-center-column">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div> 
    </div><br>
</div>

@endsection

@push('scripts')

<script>
    $(function () {
        $('#question-detail').DataTable ({
            "searching": false,
            "info":     false
        });

        $('#question-jawaban').DataTable ({
            "searching": false,
            "info":     false
        });
    });
</script>

@endpush
