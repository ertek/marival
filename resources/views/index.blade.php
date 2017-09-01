@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($main_post)
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/storage/{{ $main_post->imagen }}" alt="" width="100%">
                        </div>
                        <div class="col-md-8">
                            <h2>{{ $main_post->titulo }}</h2>
                            <p>{{ str_limit($main_post->texto,200) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <h2>{{ $second_post->titulo }}</h2>
                            <p>{{ str_limit($second_post->texto,200) }}</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/storage/{{ $second_post->imagen }}" alt="" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="/storage/{{ $third_post->imagen }}" alt="" width="100%">
                        </div>
                        <div class="col-md-12">
                            <h2>{{ $third_post->titulo }}</h2>
                            <p>{{ str_limit($third_post->texto,200) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($last_four as $post)
                    <div class="col-md-3">
                        <img src="/storage/{{ $post->imagen }}" width="100%" alt="">
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <div class="jumbotron text-center">
                    <h1>Sitio sin configurar =(</h1>
                    <p>Solo ejecuta lo siguiente:</p>
                    <pre>php artisan migrate:refresh --seed</pre>
                </div>
            </div>
        @endif
    </div>
@endsection
