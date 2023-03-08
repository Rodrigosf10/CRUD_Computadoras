@extends('layouts/main')
@section('contenido')
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light text-center"><b>Actualizar Registro de Computadora</b></h1>
                <hr>
                <form action="{{ route('update', $items->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="nombre">Actualizar Nombre de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="nombre" name="nombre" value="{{ $items->nombre }}">
                    <p></p>
                    <label for="marca">Actualizar Marca de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="marca" name="marca" value="{{ $items->marca }}">
                    <p></p>
                    <label for="modelo">Actualizar Modelo de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="modelo" name="modelo" value="{{ $items->modelo }}">
                    <p></p>
                    <label for="ram">Actualizar RAM de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="ram" name="ram" value="{{ $items->ram }}">
                    <p></p>
                    <label for="procesador">Actualizar Procesador de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="procesador" name="procesador" value="{{ $items->procesador }}">
                    <p></p>
                    <label for="discoDuro">Actualizar tamaño del Disco Duro de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="discoDuro" name="discoDuro" value="{{ $items->discoDuro }}">
                    <p></p>
                    <label for="descripcion">Actualizar Descripcion de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="descripcion" name="descripcion" value="{{ $items->descripcion }}">
                    <p></p>
                    <label for="urlImagen">Actualizar URL de Imagén de la PC:</label>
                    <input type="text" class="form-control rounded-pill border-dark alert-warning" id="urlImagen" name="urlImagen" value="{{ $items->urlImagen }}">
                    <div class="row text-center">
                        <div class="col-sm-6"><button class="btn btn-success mt-3 border-dark">Actualizar</button></div>
                        <div class="col-sm-6"><a href="/" class="btn btn-secondary mt-3 border-dark"><i class="fa fa-rotate-left"></i> Inicio</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection