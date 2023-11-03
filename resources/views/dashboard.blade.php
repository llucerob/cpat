@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <!--API Datatable css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css')}}">      
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Escritorio</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Escritorio</li>
    
@endsection

@section('content')
<div class="container-fluid">
    <div class="row starter-main">

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Procedimientos Comenzados o terminados</h5>

                    
                </div>
                <div class="card-body">
                    <table class="display" id="basic-2">
                        <thead>
                            <tr>
                                @foreach($secciones as $s)
                                    <th>{{$s->seccion}}</th>

                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-header">
                    <h5>Crear un nuevo procedimiento</h5>
                    
                </div>
                <div class="card-body">
                    <a type="button"  href="{{route('ir.seccion', ['identificacion'])}}" class="btn btn-primary m-2">Crear Nuevo</a>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-header">
                    <h5>Procedimiento 2</h5>
                    
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary m-2">Primary Button</button>
                    <button type="button" class="btn btn-primary m-2">Primary Button</button>
                    <button type="button" class="btn btn-primary m-2">Primary Button</button>
                    <button type="button" class="btn btn-primary m-2">Primary Button</button>
                    <button type="button" class="btn btn-primary m-2">Primary Button</button>
                    
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

<!--API Datatable js-->
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js')}}" ></script>
@endsection
