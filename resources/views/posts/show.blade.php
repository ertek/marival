@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Menú</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a class="list-group-item" href="{{ Route('posts.index') }}">Ver todos los posts</a>
                            <a class="list-group-item"href="{{ Route('posts.create') }}">Crear nuevo post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Mostrar Post</div>

                    <div class="panel-body">
                        <div class="jumbotron text-center">
                            <h2>{{ $post->titulo }}</h2>
                            <p>
                                {{ $post->texto }}
                            </p>
                            <img src="/storage/{{ $post->imagen }}" width="300"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
