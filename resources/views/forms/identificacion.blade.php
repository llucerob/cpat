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
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                            @foreach($preguntas as $p)

                                <div class="col-md-12">
                                    <label class="form-label" for="validationCustom01">{{$p->n_pregunta}}.-  {{$p->pregunta}}</label>
                                    @if(count($p->respuestas)>0)

                                    <select name="" class="js-example-basic-single col-sm-12" id="">
                                        @foreach($p->respuestas as $r )
                                            <option value="">{{$r->alt_respuesta}}</option>
                                        @endforeach
                                    </select>
                                    
                                    @else
                                    <input class="form-control" id="validationCustom01" type="text" required="" data-bs-original-title="" title="">

                                    @endif
                                    <div class="valid-feedback">Looks good!</div>
                               </div>

                            @endforeach
                                                                        
                        </div>
                                            
                       <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Guardar</button>
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
                    @foreach($preguntas as $c)
                    

                    <ul>
                        <li>{{$c->n_pregunta}}.- {{$c->descripcion}}</li>
                    </ul>
                    
                    @endforeach
                    

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

@endsection
