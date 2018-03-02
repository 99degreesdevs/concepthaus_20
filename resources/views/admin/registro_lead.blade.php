@extends('layouts.appAdmin')

@section('content')
    <div class="container-fluid" ng-controller="AdminController" ng-cloak>
      <div class="row">
          <div class="col-md-12">
              <div class="card card-transparent">
                  <div class="card-header card-title-gral" data-background-color="white">
                      <h4 class="title">Registro de leads</h4>
                      <p class="category">En esta sección sepodra agregar leads manualmente.</p>
                      <img src="{{asset('img/logo/concept.svg')}}" class="ajust-top" alt="Concept Haus">
                  </div>
              </div>
          </div>
      </div>
      <div ng-controller="RegistroController as contacto">
      <form id="contactoForm" name="contactoForm">
        {{ csrf_field() }}
        <input type="text" ng-model="contacto.fuente = '{{auth()->user()->name}}'" hidden>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" id="nombre" name="nombre" ng-model="contacto.nombre" placeholder="Nombre" required>
                <span class="msg-error" ng-messages="contactoForm.nombre.$error" ng-if="contactoForm.nombre.$touched">
                    <div ng-messages-include="/messages_error.html"></div>
                </span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <input type="email" class="form-control" id="correo" name="correo" ng-model="contacto.correo" placeholder="Correo" required>
                <span class="msg-error" ng-messages="contactoForm.correo.$error" ng-if="contactoForm.correo.$touched">
                    <div ng-messages-include="/messages_error.html"></div>
                </span>
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="telefono" name="telefono" mask="9999999999" ng-model="contacto.telefono" ng-minlength="8"
                    placeholder="Teléfono" required>
                <span class="msg-error" ng-messages="contactoForm.telefono.$error" ng-if="contactoForm.telefono.$touched">
                    <div ng-messages-include="/messages_error.html"></div>
                </span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" id="empresa" name="empresa" ng-model="contacto.empresa" placeholder="Empresa" required>
                <span class="msg-error" ng-messages="contactoForm.empresa.$error" ng-if="contactoForm.empresa.$touched">
                    <div ng-messages-include="/messages_error.html"></div>
                </span>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <textarea class="form-control" id="mensaje" name="mensaje" ng-model="contacto.mensaje" placeholder="Detalles" rows="4" required></textarea>
                <span class="msg-error" ng-messages="contactoForm.mensaje.$error" ng-if="contactoForm.mensaje.$touched">
                    <div ng-messages-include="/messages_error.html"></div>
                </span>
            </div>
        </div>

        <div class="form-group row text-center">
            <div class="col-sm-12">
                <button class="btn" id="EnviaDatosRegistro" ng-click="saveDataContact(contacto, contactoForm)" ng-disabled="contactoForm.$invalid">Enviar</button>
            </div>
        </div>
      </form>
      </div>
    </div>

    
@endsection