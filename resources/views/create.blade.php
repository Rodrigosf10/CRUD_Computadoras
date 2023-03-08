@extends('layouts/main')
@section('contenido')
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light text-center"><b>Registro de Nueva Computadora</b></h1>
                <br>
                <form action="/store" class="text-center" method="POST">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">Nombre</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: PC del gobierno" id="nombre" name="nombre">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">Marca</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: Acer" id="marca" name="marca">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">Modelo</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: Predator Helios 300" id="modelo" name="modelo">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">RAM</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: 8 GB" id="ram" name="ram">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">Procesador</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: Intel Core i7 8th Gen." id="procesador" name="procesador">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">Disco Duro</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: 256 GB SSD" id="discoDuro" name="discoDuro">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">Descripción</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: Es robada" id="descripcion" name="descripcion">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text border-dark" id="inputGroup-sizing-default">URL de la Imagén</span>
                        <input type="text" class="form-control border-dark" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required placeholder="Ejemplo: https://statics.vrutal.com/m/b2fd/b2fd7da24ac90d97176149f0447ade3b_thumb_fb.jpg" id="urlImagen" name="urlImagen">
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><button class="btn btn-primary mt-3 border-dark">Guardar</button></div>
                        <div class="col-sm-6"><a href="/" class="btn btn-primary mt-3 border-dark"><i class="fa-solid fa-rotate-left"></i> Inicio</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection