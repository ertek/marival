@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Menú</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a class="list-group-item" href="{{ Route('menu.index') }}">Ver todos los Items</a>
                            <a class="list-group-item"href="{{ Route('menu.create') }}">Crear nuevo Item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Item</div>

                    <div class="panel-body">
                        <form action="{{ route('menu.update',$item->id) }}" method="POST">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $item->nombre }}">
                                <small class="form-text text-muted">Nombre del item del menú.</small>
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input type="text" name="url" class="form-control" placeholder="http://www.google.com/" value="{{ $item->url }}">
                            </div>
                            <button class="btn btn-primary" type="submit">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
