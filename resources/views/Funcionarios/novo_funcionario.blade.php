@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Funcionarios</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/funcionarios">Funcionarios</a></li>
                    <li class="breadcrumb-item">Novo Funcionario</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Cadastrar Novo Funcionario</h3>
            </div>

            <form action="store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input required type="text" class="form-control" name="nome">
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sobrenome</label>
                                <input required type="text" class="form-control" name="sobrenome">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Idade</label>
                                <input required type="text" class="form-control" name="idade">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CPF</label>
                                <input required type="text" class="form-control" name="cpf">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Endereço</label>
                                <input required type="text" class="form-control" name="endereco">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Salário</label>
                                <input required type="text" class="form-control" name="salario">
                            </div>
                        </div>


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
