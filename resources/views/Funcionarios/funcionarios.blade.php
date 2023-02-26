@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Funcionários</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Funcionários</li>
                    </ol>
                </div>
            </div>

            <a href="/funcionarios/novo" class="btn mb-2 btn-primary">Novo Funcionário</a>

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tabela de Funcionários</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Documento</th>
                                <th>Salário</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($funcionarios as $funcionario)
                                <tr>
                                    <td>{{ $funcionario->id }}</td>
                                    <td>{{ $funcionario->nome }}</td>
                                    <td>{{ $funcionario->cpf }}</td>
                                    <td>{{ $funcionario->salario }}</td>
                                    <td class="col-sm-3">
                                        <a href="/funcionarios/visualizar/{{ $funcionario->id }}"
                                            class="btn mb-2 btn-info">Visualizar</a>
                                        <a href="/funcionarios/editar/{{ $funcionario->id }}"
                                            class="btn mb-2 btn-warning">Editar</a>
                                        <a href="/funcionarios/deletar/{{ $funcionario->id }}"
                                            class="btn mb-2 btn-danger">Deletar</a>
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
