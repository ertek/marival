@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Menú</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a class="list-group-item active" href="{{ Route('posts.index') }}">Ver todos los posts</a>
                            <a class="list-group-item"href="{{ Route('posts.create') }}">Crear nuevo post</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>

                    <div class="panel-body">
                        {{ $posts->links() }}
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Titulo</td>
                                    <td>Texto</td>
                                    <td>Imagen</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $key => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->titulo }}</td>
                                        <td>{{ str_limit($value->texto, 300) }}</td>
                                        <td style="text-align:center;"><img src="storage/{{ $value->imagen }}" width="100"/></td>

                                        <td>
                                            <form action="{{ Route('posts.destroy', $value->id) }}" method="POST" class="pull-right">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                            <a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $value->id) }}">Mostrar</a>
                                            <a class="btn btn-small btn-info" href="{{ URL::to('posts/' . $value->id . '/editar') }}">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
