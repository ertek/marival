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
                            <a class="list-group-item active"href="{{ Route('posts.create') }}">Crear nuevo post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Post</div>

                    <div class="panel-body">
                        <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{ $post->titulo }}">
                                <small class="form-text text-muted">Titulo del post</small>
                            </div>
                            <div class="form-group">
                                <label for="texto">Texto</label>
                                <textarea id="texto" name="texto" cols="30" rows="10" class="form-control" placeholder="Texto del post">{{ $post->texto }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                            </div>
                            <button class="btn btn-primary" type="submit">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
