@extends('theme.plantilla')
<!-- ************************************************************* -->
@section('cuerpo_pagina')
    <div class="container-fluid">
        <div class="row mt-5 mb-3">
            <div class="col-12 text-center">
                <h2>Directorio de Emprendedores Funza 2023</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            @foreach ($categorias as $categoria)
                <div class="col-md-4 col-12">
                    <a href="{{ route('categorias', ['id' => $categoria->id]) }}" style="text-decoration: none">
                        <div class="card">
                            <img src="{{ asset('imagenes/proyectos/' . $categoria->foto) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body text-white"
                                style="background: linear-gradient(rgb(153, 70, 88), rgb(49,21,41));border: 1px solid white;">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <img class="img-fluid" src="{{ asset('imagenes/sistema/funza_blaco.png') }}"
                                            alt="" style="max-height: 120px;">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h5 class="card-title"><strong>{{ $categoria->categoria }}</strong></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
