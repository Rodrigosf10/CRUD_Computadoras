@extends('layouts/main')
@section('contenido')
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5 text-center">
                <h1 class="fw-light text-center"><b>Eliminar Registro del Equipo</b></h1>
                <hr>
                <h3 class="text-center">¿Estas seguro de que quieres eliminar este registro?</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Nombre</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->nombre }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Marca</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->marca }}">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Modelo</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->modelo }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">RAM</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->ram }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Procesador</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->procesador }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Disco Duro</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->discoDuro }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Descripción</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->descripcion }}">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">URL de la Imagén</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->urlImagen }}">
                        </div>
                    </div>
                </div>
                <form action="{{ route('destroy', $items->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row text-center">
                        <div class="col-sm-6"><button class="btn btn-danger mt-3 border-dark">Eliminar Definitivamente</button></div>
                        <div class="col-sm-6"><a href="/" class="btn btn-info mt-3 border-dark">Volver al inicio</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection