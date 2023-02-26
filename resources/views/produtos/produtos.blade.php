@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Produtos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Produtos</li>
                    </ol>
                </div>
            </div>

                <a href="/produtos/novo" class="btn mb-2 btn-primary">Novo Produto</a>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tabela de Produto</h3>
                </div>
        
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Estoque</th>
                        <th>Preço por Unidade</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
        
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->titulo }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->estoque }}</td>
                                <td>{{ $produto->preco }}</td>
                                <td class="col-sm-3"> 
                                    <a href="/produtos/visualizar/{{ $produto->id }}" class="btn mb-2 btn-info">Visualizar</a>
                                    <a href="/produtos/editar/{{ $produto->id }}" class="btn mb-2 btn-warning">Editar</a>
                                    <a href="/produtos/deletar/{{ $produto->id }}" class="btn mb-2 btn-danger">Deletar</a>
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