@extends('layouts.appThanks')
@section('content')

<div ng-controller="ProyectosController" class="body-thanks">
    <section id="" class="container-fluid d-flex justify-content-center align-items-center h-100">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="row col-md-12 px-0">
                <div class="col-md-12 text-center interiorPuerta">
                  <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                      <h1 class="c-white size-titleoops mb-6">OOPS!</h1>

                    </div>
                    <div class="col-md-3">
                      <p class="interior-titulooops col-md-12 text-small3 text-left c-red">
                          Algo salió mal :(
                          <br>
                          <span class="c-gray">Error inesperado,
                            <br>
                            inténtalo de nuevo.
                          </span>
                    </div>

                  </div>

                </div>
                <div class="col-md-12 d-flex justify-content-end align-items-center pr-7">
                  <a href="{{url('/')}}" class="btn btn-outline-danger px-4 py-1 btn-border" role="button" aria-pressed="true">Regresar</a>
                </div>
            </div>
        </div>

    </section>



</div>
@endsection