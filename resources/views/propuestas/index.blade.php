@extends('theme.plantilla')
<!-- ************************************************************* -->
@section('cuerpo_pagina')
    <div class="container-fluid">
        <div class="row mt-5 mb-3">
            <div class="col-12 text-center">
                <h2>Directorio de Emprendedores Funza 2023 {{ $categoria->categoria }}</h2>
                <a href="{{ route('index') }}" class="btn btn-info btn-sombra pl-5 pr-5 float-end">Volver</a>
            </div>
        </div>
        <div class="row d-flex justify-content-evenly mt-5">
            @foreach ($categoria->propuestas as $propuesta)
                <div class="col-md-5 col-12">
                    <div class="card">
                        <div class="card-body" style="height: 100%;">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-md-8">
                                    <div id="carouselExampleInterval_{{ $propuesta->id }}" class="carousel slide"
                                        data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($propuesta->foto1)
                                                <div class="carousel-item active" data-bs-interval="10000">
                                                    <img src="{{ asset('imagenes/proyectos/' . $propuesta->foto1) }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                            @endif
                                            @if ($propuesta->foto2)
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <img src="{{ asset('imagenes/proyectos/' . $propuesta->foto2) }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                            @endif
                                            @if ($propuesta->foto3)
                                                <div class="carousel-item">
                                                    <img src="{{ asset('imagenes/proyectos/' . $propuesta->foto3) }}"
                                                        class="d-block w-100" alt="...">
                                                </div>
                                            @endif
                                        </div>
                                        <button class="carousel-control-prev text-black" type="button"
                                            data-bs-target="#carouselExampleInterval_{{ $propuesta->id }}"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Anterior</span>
                                        </button>
                                        <button class="carousel-control-next text-black" type="button"
                                            data-bs-target="#carouselExampleInterval_{{ $propuesta->id }}"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Siguinte</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <div class="row text-center">
                                        @if ($propuesta->pagina)
                                            <div class="col-12 col-md-10 text-start mb-3">
                                                <a href="{{ $propuesta->pagina }}" target="_blank"><img
                                                        class="img-fluid mr-4"
                                                        src="{{ asset('imagenes/sistema/pagina.png') }}"
                                                        style="max-height: 25px;">{{ $propuesta->pagina }}</a>
                                            </div>
                                        @endif
                                        @if ($propuesta->facebook)
                                            <div class="col-12 col-md-10 text-start mb-3">
                                                <a href="{{ $propuesta->facebook }}" target="_blank"><img
                                                        class="img-fluid mr-4"
                                                        src="{{ asset('imagenes/sistema/facebook.png') }}"
                                                        style="max-height: 25px;">{{ $propuesta->facebook }}</a>
                                            </div>
                                        @endif
                                        @if ($propuesta->instagram)
                                            <div class="col-12 col-md-10 text-start mb-3">
                                                <a href="{{ $propuesta->instagram }}" target="_blank"><img
                                                        class="img-fluid mr-4"
                                                        src="{{ asset('imagenes/sistema/instagram.png') }}"
                                                        style="max-height: 25px;">{{ $propuesta->instagram }}</a>
                                            </div>
                                        @endif
                                        <div class="col-12 col-md-10 text-start mb-3">
                                            <h5>Propietario:
                                                {{ ucfirst($propuesta->nombre) . ' ' . ucfirst($propuesta->apellido) }}</h5>
                                        </div>
                                        @if ($propuesta->direccion)
                                            <div class="col-12 col-md-10 text-start mb-1">
                                                <h6>Dirección: {{ ucfirst($propuesta->direccion) }}</h6>
                                            </div>
                                        @endif
                                        @if ($propuesta->telefono)
                                            <div class="col-12 col-md-10 text-start mb-1">
                                                <h6>Teléfono: {{ ucfirst($propuesta->telefono) }}</h6>
                                            </div>
                                        @endif
                                        @if ($propuesta->email)
                                            <div class="col-12 col-md-10 text-start mb-1">
                                                <h6>Correo Electrónico: {{ ucfirst($propuesta->email) }}</h6>
                                            </div>
                                        @endif
                                        @if ($propuesta->email)
                                            <div class="col-12 col-md-10 text-start mb-1">
                                                <p style="text-align: justify">{{ $propuesta->descripcion }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
