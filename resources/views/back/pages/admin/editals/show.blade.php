@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Editar Edital')
@section('content')
    <form>
        @csrf
        <div class="form-row">
            <div class="col">
                <label>Nome do edital</label>
                <input class="form-control" type="text" placeholder="Entre com o nome do edital" value="{{ $edital->name}}" readonly="">
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Numero do edital</label>
                    <input class="form-control"  type="text" placeholder="Número do edital" value="{{ $edital->numero}}" readonly="">
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-9">
                <label>Período de Inscrição</label>
                <div class="row">
                    <div cclass="col-8 col-sm-6">
                        <label>Data de início</label>
                        <input class="form-control date-picker" placeholder="Select Date" type="text" name="data_inicio" value="{{ $edital->data_inicio}}" readonly="">
                    </div>
                    <div class="col-8 col-sm-6">
                        <label>Data final</label>
                        <input class="form-control date-picker" placeholder="Select Date" type="text" name="data_fim" value="{{ $edital->data_fim}}" readonly="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="padding: 15px">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Documentos a serem anexados</label>
                    <input type="text" class="form-control" placeholder="Nome do documento a ser anexado" readonly="">
                </div>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="form-group">
                    <label>Peso</label>
                    <input type="number" class="form-control" readonly="">
                </div>
            </div>
            <div class="form-group">
                <label>Adicionar</label>
                <input id="add_docs" type="number" value="0" name="add_docs " class="form-control" width="30px" readonly="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label>Adicionar outros campos</label>
                    <input type="text" class="form-control" placeholder="Nome do documento a ser anexado" readonly="">
                </div>
            </div>
            <div class="form-group col-md-2">
                <div class="form-check" style="margin-top: 40px">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Obrigatório?</label>
                </div>
            </div>
            <div class="form-group col-md-2">
                <div class="col-md-3">
                    <div class="form-group">
                        <label></label>
                        <button type="button" class="btn btn-outline-secondary">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row" style="padding: 10px">
            <div class="col">
                <a class="btn btn-primary" href="{{route( 'admin.manage-editais' ) }}" role="button">Voltar</a>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="" role="button">Acessar participantes incritos</a>
            </div>
        </div>
    </form>
        <script type="text/javascript">
            $('.form-control date-picker').datepicker({
                format: "dd/mm/YYYY",
                language: "pt-BR"
            });
        </script>
@endsection
