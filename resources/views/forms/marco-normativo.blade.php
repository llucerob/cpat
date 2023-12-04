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
    <li class="breadcrumb-item active">Marco Normativo</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row starter-main">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h5>Marco Normativo </h5>
                    
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{ route('paso2.store', $id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">


                            @foreach($preguntas as $key => $p)

                                <div class="col-md-12" onclick="cambiacolor({{$p->id}});" id="preg{{$key}}" >
                                    <label class="form-label" for="validationCustom01">{{$p->n_pregunta}}.-  {{$p->pregunta}}</label>
                                    @if(count($p->respuestas)>0)
                                    

                                        <select name="preg[{{$p->id}}]" @if($p->id == 14) onchange="habilitar({{$p->id}});" id="{{$p->id}}"  @endif  class="js-example-basic-single col-sm-12" >
                                            <option value="">Seleccione una Opción</option>
                                            @foreach($p->respuestas as $r )
                                                <option value="{{$r->alt_respuesta}}">{{$r->alt_respuesta}}</option>
                                            @endforeach
                                        </select>
                                    
                                    @else
                                    <input class="form-control" name="preg[{{$p->id}}]" id="validationCustom01" type="text" required="" data-bs-original-title="" title="">

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
                    

                    
                        <li id="coment{{$c->id}}">{{$c->n_pregunta}}.- {{$c->descripcion}}</li>
                    
                    
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
        const caja = document.getElementById('coment'+variable);
        
        caja.style.border = "2px solid red";
        caja.style.margin = "5px";
        setTimeout(() => {
            caja.style.border = "";
            caja.style.margin = "";
            
        }, 4000);

        }
    </script>
    <script>
        function habilitar(variable){
            var padre;
            padre = document.getElementById(variable);
            padre = padre[padre.selectedIndex].value;


            if(padre == 'Si'){
                document.getElementById('preg3').style.display = "block";
                document.getElementById('preg4').style.display = "block";
                document.getElementById('preg5').style.display = "block";
        
                
            }else{
                document.getElementById('preg3').style.display = "none";
                document.getElementById('preg4').style.display = "none";
                document.getElementById('preg5').style.display = "none";
        
            }


        }
    </script>

<script>
    window.onload = function () {
        var link;
        
        document.getElementById('preg3').style.display = "none";
        document.getElementById('preg4').style.display = "none";
        document.getElementById('preg5').style.display = "none";
        link = document.getElementById('coment13');
        var a = document.createElement("a");
            a.innerHTML =" Click Aqui";
            a.href= "https://www.bcn.cl/leychile";
        
        link.append(a);

       
      
    }
  </script>


   

@endsection
