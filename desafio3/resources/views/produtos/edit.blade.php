@extends('layouts.default')

@section('conteudo')
<br>
    <div class="col-8 m-auto">
    @if(isset($product))
        <form name="formEdit" id="formEdit" method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
            {{ method_field('PUT') }}
    @else
      <form name="formCard" id="formCard" method="POST" action="{{url('produtos/listar')}}">
    @endif
          {!! csrf_field() !!}
               <legend>Produto - Editar </legend>
               @if(isset($errors) && count($errors)>0)
                <div class="alert alert-dismissible alert-danger">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    @foreach($errors->all() as $erro)
                        <strong>Erro!</strong> {{$erro}}<br>
                    @endforeach
                </div>
              @endif
              <div class="form-group">
                <label for="name" class="form-label mt-4">Nome</label>
                <input type="text" value="{{$product->name}}"  id="name" name="name" class="form-control"  placeholder="Digite o nome do produto" required 
                        value=""
                >
              </div>
              <div class="form-group">
                <label for="description" class="form-label mt-4">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                value=""
                >
                {{ $product->description }}
            </textarea>
              </div>
              <div class="form-group">
                <label class="form-label mt-4" >Preço</label>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" id="price" name="price"  value="{{$product->price}}" class="form-control" aria-label="Preco" required value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="category_id" class="form-label mt-4">Categoria {{ $product->category_id}}</label>
                <select class="form-select" id="category_id" name="category_id" required>
                  <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : ''  }}  > {{$category->name}}</option>
                    @endforeach
                </select>
              </div>

            <div class="d-grid gap-2">
                <br>
                <button  class="btn btn-primary btn-lg">Cadastrar</button>
              </div>
        </form>
    </div>
@stop