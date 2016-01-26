@extends('layouts.layout')

@section('content')

    <div class="row"> <!--Sección del cuerpo-->
      <div class="col-md-12 col-sm-12">
        <div class="row">
            <div class="col-md-8" style="background-color:lavender;">
                <p>Bienvenido al Sistema de formalización de inscripción de Seminarios y 
                Trabajo Especial de Grado de la Escuela de Biología de la Facultad de Ciencias de la U.C.V., 
                el cual permite de forma virtual hacer las operaciones: Formalización de Incripción, 
                Verificación de Datos, Solicitud de Tutor, etc.</p>
            </div>
            <div id="myCarousel" class="carousel slide col-md-8" data-ride="carousel">
                  <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                  <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="{{URL::to('/')}}/images/caps.jpg" alt="">
                    </div>

                    <div class="item">
                      <img src="{{URL::to('/')}}/images/caps2.png" alt="">
                    </div>

                    <div class="item">
                      <img src="{{URL::to('/')}}/images/dip2.jpg" alt="">
                    </div>

                    <div class="item">
                      <img src="{{URL::to('/')}}/images/micro.jpg" alt="">
                    </div>

                    <div class="item">
                      <img src="{{URL::to('/')}}/images/podcast.jpg" alt="">
                    </div>
                </div>

                  <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
            <div class="col-md-4" style="">
                <div class="container-fluid">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">Ingresar</div>
                            <div class="panel-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> Hubo errores en sus datos.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form>
                                    <div class="form-group">
                                      <label class="col-xs-3 control-label">Email</label>
                                      <div class="col-xs-12">
                                          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-4 control-label">Contraseña</label>
                                        <div class="col-xs-12">
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-9">
                                            <button type="submit" class="btn btn-primary">
                                              Ingresar
                                            </button>
                                            <a style="float: left" href="/password/email">¿Olvidaste de tu contraseña?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
      </div>
  </div>
@stop
