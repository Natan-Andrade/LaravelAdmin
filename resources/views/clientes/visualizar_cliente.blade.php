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
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Cliente: {{ $cliente->nome }}</h3>
            </div>

            <form action="/clientes/store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" name="nome" value="{{ $cliente->nome }}"
                                    required required readonly>
                                <input type="hidden" class="form-control" name="id" value="{{ $cliente->id }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sobrenome</label>
                                <input type="text" class="form-control" name="nome" value="{{ $cliente->sobrenome }}"
                                    required required readonly>
                            </div>
                        </div>
                       
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Empresa</label>
                                <input type="text" class="form-control" name="telefone" value="{{ $cliente->cnpj }}"
                                    required required readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CNPJ</label>
                                <input type="text" class="form-control" name="nome" value="{{ $cliente->cnpj }}"
                                    required required readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
