@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Funcionário</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/funcionarios">Funcionários</a></li>
                    <li class="breadcrumb-item">Editar Funcionário</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ $funcionario->nome }}</h3>
            </div>

            <form action="/funcionarios/store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input required type="text" class="form-control" name="nome" value="{{ $funcionario->nome}}">
                                <input required type="hidden" class="form-control" name="id" value="{{ $funcionario->id}}">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sobrenome</label>
                                <input required type="text" class="form-control" name="sobrenome" value="{{ $funcionario->sobrenome}}">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Idade</label>
                                <input required type="text" class="form-control" name="idade" value="{{ $funcionario->idade}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF</label>
                                <input required type="text" class="form-control" name="cpf" value="{{ $funcionario->cpf}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço</label>
                                <input required type="text" class="form-control" name="endereco" value="{{ $funcionario->endereco}}">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Salário</label>
                                <input required type="text" class="form-control" name="salario" value="{{ $funcionario->salario}}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
