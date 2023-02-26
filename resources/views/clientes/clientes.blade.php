@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div>
            </div>

                <a href="/clientes/novo" class="btn mb-2 btn-primary">Novo Cliente</a>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tabela de Clientes</h3>
                </div>
        
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Empresa</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
        
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->empresa }}</td>
                                <td class="col-sm-3"> 
                                    <a href="/clientes/visualizar/{{ $cliente->id }}" class="btn mb-2 btn-info">Visualizar</a>
                                    <a href="/clientes/editar/{{ $cliente->id }}" class="btn mb-2 btn-warning">Editar</a>
                                    <a href="/clientes/deletar/{{ $cliente->id }}" class="btn mb-2 btn-danger">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
        
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>

  
@endsection