@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Home page')
@section('content')
    <form>
        <div class="form-row">
            <div class="col">
                <label>Nome do edital</label>
                <input class="form-control" type="text" placeholder="Entre com o nome do edital">
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Numero do edital</label>
                    <input class="form-control"  type="text" placeholder="Número do edital">
                </div>

            </div>

        </div>
        <div class="form-group">
            <div class="col-auto">
                <label>Período de Inscrição</label>
                <input class="form-control datetimepicker-range" placeholder="Select Month" type="text">
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Documentos a serem anexados</label>
                    <input type="text" class="form-control" placeholder="Nome do documento a ser anexado">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>Peso</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Adicionar</label>
                <input id="add_docs" type="number" value="0" name="add_docs " class="form-control" width="30px">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Addicionar outros campos</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Adicionar</label>
                <input id="add_fields" type="number" value="0" name="add_fields " class="form-control" width="30px">
            </div>
            <div class="custom-control custom-checkbox mb-5">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Obrigatório?</label>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <button>Add</button>
                </div>
            </div>
        </div>

        <div class="actions clearfix">
            <ul role="menu" aria-label="Pagination">
                <button class="btn btn-primary" type="submit">
                    Submeter
                </button>
                <button type="button" class="btn btn-danger">
                    Cancelar
                </button>
            </ul>
        </div>
    </form>

@endsection
