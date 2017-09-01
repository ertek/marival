@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Menú</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a class="list-group-item active" href="{{ Route('menu.index') }}">Ver todos los Items</a>
                            <a class="list-group-item"href="{{ Route('menu.create') }}">Crear nuevo Item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Menús</div>

                    <div class="panel-body">
                        {{ $menus->links() }}
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Nombre</td>
                                    <td>Url</td>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menu as $key => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->nombre }}</td>
                                        <td>{{ str_limit($value->url, 300) }}</td>

                                        <td>
                                            <form action="{{ Route('menu.destroy', $value->id) }}" method="POST" class="pull-right">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                            <a class="btn btn-small btn-info" href="{{ URL::to('menu/' . $value->id . '/editar') }}">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $menus->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
