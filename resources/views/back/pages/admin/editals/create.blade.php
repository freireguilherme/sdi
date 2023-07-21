@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Criar Novo Edital')
@section('content')
    <form action="{{ route('editals.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col">
                <label>Nome do edital</label>
                <input class="form-control" type="text" placeholder="Entre com o nome do edital" name="name">
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Numero do edital</label>
                    <input class="form-control"  type="text" placeholder="Número do edital" name="numero">
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col">
                <label>Selecione o período de inscrição</label>
                <div class="col-6 col-sm-3">
                    <input class="form-control date-picker" placeholder="Selecione a data" type="text" id="data_inicio">
                    <span style="margin-right: 10px"> ate</span>
                    <input class="form-control date-picker" placeholder="Selecione a data" type="text" id="data_fim">
                </div>
            </div>
            <div class="w-100">

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
                    <input type="number" class="form-control">
                </div>
            </div>
            <div class="col-md-3 offset-md-3">
                <label></label>
                <button type="button" class="btn btn-outline-secondary" style="margin-top: 30px">Add</button>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group">
                    <label>Adicionar outros campos</label>
                    <input type="text" class="form-control" placeholder="Nome do documento a ser anexado">
                </div>
            </div>
            <div class="form-group col-md-2">
                <div class="form-check" style="margin-top: 40px">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Obrigatório?</label>
                </div>
            </div>
                <div class="col-md-3">
                    <div class="col-md-6 offset-md-4">
                        <label></label>
                        <button type="button" class="btn btn-outline-secondary" style="margin-top: 30px">Add</button>
                    </div>
                </div>
            </div>

        <div class="actions clearfix" style="padding: 10px">
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
    @push('create-edital-scripts')
        <script src="/back/src/plugins/switchery/switchery.min.js"></script>
        <script src="/back/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script src="/back/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
        <script src="/back/vendors/scripts/advanced-components.js"></script>
        <script>
            $('.input-daterange input').each(function() {
                $(this).datepicker('clearDates');
            });
        </script>
        <script src="/back/src/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
		<script src="/back/src/plugins/jquery-asGradient/dist/jquery-asGradient.js"></script>
		<script src="/back/src/plugins/jquery-asColorPicker/jquery-asColorPicker.js"></script>
		<script src="/back/vendors/scripts/colorpicker.js"></script>
    @endpush
@endsection
