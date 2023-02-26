@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Cliente</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/clientes">Clientes</a></li>
                    <li class="breadcrumb-item">Editar Cliente</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ $cliente->nome }}</h3>
            </div>

            <form action="/clientes/store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input required type="text" class="form-control" name="nome" value="{{ $cliente->nome }}">
                                <input required type="hidden" class="form-control" name="id" value="{{ $cliente->id }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sobrenome</label>
                                <input required type="text" class="form-control" name="sobrenome" value="{{ $cliente->sobrenome }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Empresa</label>
                                <input required type="text" class="form-control" name="empresa" value="{{ $cliente->empresa }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CNPJ</label>
                                <input required type="text" class="form-control" name="cnpj" value="{{ $cliente->cnpj }}">
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
