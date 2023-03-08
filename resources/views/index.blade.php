@extends('layouts/main')
@section('contenido')
    <!-- Page Content -->
    <div class="container-fluid">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light text-center"><b>Tabla de Contenido de Computadoras</b></h1>
                <hr>
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>RAM</th>
                            <th>Procesador</th>
                            <th>Disco Duro</th>
                            <th>Descripcion</th>
                            <th>URL de la Imagén</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody class="table-info">
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->marca }}</td>
                            <td>{{ $item->modelo }}</td>
                            <td>{{ $item->ram }}</td>
                            <td>{{ $item->procesador }}</td>
                            <td>{{ $item->discoDuro }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td><img src="{{ $item->urlImagen }}" style="width: 200px; height:120px;"></td>
                            <td><a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Editar</a></td>
                            <td><a href="{{ route('show', $item->id) }}" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection