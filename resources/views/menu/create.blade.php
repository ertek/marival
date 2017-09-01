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
                            <a class="list-group-item active"href="{{ Route('menu.create') }}">Crear nuevo Item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Item del Menú</div>

                    <div class="panel-body">
                        <form action="{{ route('menu.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="titulo">Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                <small class="form-text text-muted">Nombre del item del menú</small>
                            </div>
                            <div class="form-group">
                                <label for="texto">URL</label>
                                <input type="text" name="url" class="form-control" placeholder="http://www.google.com/">
                            </div>
                            <button class="btn btn-primary" type="submit">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
