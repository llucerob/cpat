@extends('layouts.master')

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
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
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Identificación</h5>
                    
                </div>
                <div class="card-body">
                    
                    

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
@endsection
