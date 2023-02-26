@extends('adminlte::page')

@section('title', 'LaravelAdmin')

@section('content')
    
    @yield('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@stop