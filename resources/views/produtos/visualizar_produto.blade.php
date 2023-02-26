@extends('layouts.admin')

@section('content')
    <section class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Editar Produto</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/produtos">Produtos</a></li>
                    <li class="breadcrumb-item">Editar Produto</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="col-lg-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">{{ $produto->titulo }}</h3>
            </div>

            <form action="/produtos/store">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo</label>
                                <input required type="text" class="form-control" name="titulo" value="{{ $produto->titulo }}" required readonly>
                                <input required type="hidden" class="form-control" name="id" value="{{ $produto->id }}">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descrição</label>
                                <textarea class="form-control" name="descricao" required readonly>{{ $produto->descricao }}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Estoque</label>
                                <input required type="number" class="form-control" name="estoque" value="{{ $produto->estoque }}" required readonly>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Preço</label>
                                <input required type="number" class="form-control" name="preco" value="{{ $produto->preco }}" required readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection