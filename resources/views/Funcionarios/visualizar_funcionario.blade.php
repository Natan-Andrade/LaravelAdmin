@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Funcionario</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/funcionarios">Funcionarios</a></li>
                    <li class="breadcrumb-item">Editar Funcionario</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="col-lg-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Funcionario: {{ $funcionario->nome }}</h3>
            </div>

            <form action="/funcionarios/store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" name="nome" value="{{ $funcionario->nome}}" required readonly>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenome" value="{{ $funcionario->sobrenome}}" required readonly>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Idade</label>
                                <input type="text" class="form-control" name="idade" value="{{ $funcionario->idade}}" required readonly>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF</label>
                                <input type="text" class="form-control" name="cpf" value="{{ $funcionario->cpf}}" required readonly>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço</label>
                                <input type="text" class="form-control" name="endereco" value="{{ $funcionario->endereco}}" required readonly>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Salário</label>
                                <input type="text" class="form-control" name="salario" value="{{ $funcionario->salario}}" required readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
