@extends('master')

@section('content')

<div class="container-fluid mb-5">
    <h2 class="mt-4">
        @isset($tagname)
            {{ $tagname }}
            @else
            Pertanyaan
        @endisset
        
    </h2>
    <hr class="mt-0 mb-3">

    <a href="/question/create" type="button" class="btn btn-success mb-5">
        Tambah Pertanyaan
    </a>

    <div class="table-responsive">
        <table class="table" id="example1">
            <thead class="d-none">
                <tr>
                <th scope="col" width="40">#</th>
                <th scope="col">First</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr class="bg-linear box-shadows text-white mb-3">
                        <td scope="row">
                            <div class="likes">
                                <p class="text-center mb-0">0</p>
                                <p class="text-center font-weight-light">Likes</p>
                            </div>
                            <div class="answer">
                                <p class="text-center mb-0"> {{ $question->answers->count() }} </p>
                                <p class="text-center font-weight-light">Jawaban</p>
                            </div>
                        </td>
                        <td>
                            <a class="text-white" href="/question/{{ $question->id }}/detail">
                                <h5>
                                    {{ $question->title }}
                                </h5>
                            </a>
                            
                            <span>
                                {{ $question->content }}
                            </span>
                            <hr class="mt-3 mb-2">

                            <div class="footer-question d-flex">
                                <div class="footquest-left">
                                    @foreach ($question->tags as $tag)
                                        <button type="button" class="btn btn-primary btn-sm">
                                            {{ $tag->name }}
                                        </button>
                                    @endforeach
                                </div>

                                <div class="footquest-right ml-auto">
                                    <a class=" text-white" id="userDropdown" href="#">
                                        <i class="fas fa-user fa-fw"></i>
                                        <span>{{ $question->user->name }}</span>
                                    </a>
                                </div>
                            </div>

                            <div class="footer-question d-flex">
                                <div class="footquest-right ml-auto">
                                    <div class="text-white font-italic" id="userDropdown" href="#" style="font-size: 16px;">
                                        <span>Dibuat:
                                            {{ $question->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>            
</div>

@endsection

@push('scripts')

<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>

@endpush
