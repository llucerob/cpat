@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
    <!-- Select 2 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tagify.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>Cpat Coinco</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Cpat</li>
    <li class="breadcrumb-item active">Identificación</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row starter-main">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>Identificación</h5>
                    
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{ route('paso1.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            @foreach($preguntas as $key => $p)

                                <div class="col-md-12" onclick="cambiacolor({{$p->id}});">
                                    <label class="form-label" for="validationCustom01">{{$p->n_pregunta}}.-  {{$p->pregunta}}</label>
                                    @if(count($p->respuestas)>0)

                                        <select name="reg[{{$key}}]" class="js-example-basic-single col-sm-12"  >
                                            @foreach($p->respuestas as $r )
                                                <option value="{{$r->alt_respuesta}}">{{$r->alt_respuesta}}</option>
                                            @endforeach
                                        </select>
                                    
                                    @else
                                        <input class="form-control" id="validationCustom01" type="text" name="reg[{{$key}}]" data-bs-original-title="">

                                    @endif
                                        <div class="valid-feedback">Genial!</div>
                               </div>

                            @endforeach
                                                                        
                        </div>
                        <div class="row g-3 m-2">
                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Guardar</button>

                        </div>
                                            
                       
                    </form>

                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>Comentarios</h5>
                    
                </div>
                <div class="card-body">
                    <ul>
                    @foreach($preguntas as $c)
                    

                    
                        <li id="{{$c->id}}">{{$c->n_pregunta}}.- {{$c->descripcion}}</li>
                    
                    
                    @endforeach
                </ul>
                    

                </div>
            </div>
        </div>
        
       
    </div>
</div>
    <script type="text/javascript">
        var session_layout = '{{ session()->get('layout') }}';
    </script>
@endsection

@section('script')
    <!-- Select2 JS -->
    <script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('assets/js/select2/tagify.js')}}"></script>
    <script src="{{asset('assets/js/select2/tagify.polyfills.min.js')}}"></script>
    <script>
        
        function cambiacolor(variable){
        const caja = document.getElementById(variable);
        
        caja.style.border = "2px solid red";
        caja.style.margin = "5px";
        setTimeout(() => {
            caja.style.border = "";
            caja.style.margin = "";
            
        }, 4000);

        }
    </script>

@endsection
