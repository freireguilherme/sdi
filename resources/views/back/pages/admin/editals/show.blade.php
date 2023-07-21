@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Editar Edital')
@section('content')
    <form action="{{ route('editals.update', $edital->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="col">
                <label>Nome do edital</label>
                <input class="form-control" type="text" placeholder="Entre com o nome do edital" value="{{ $edital->name}}" readonly="">
            </div>
            <div class="col">
                <div class="col-8 col-sm-4">
                    <label>Numero do edital</label>
                    <input class="form-control"  type="text" placeholder="Número do edital" value="{{ $edital->numero}}" readonly="">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col" style="margin-top: 15px">
                <label>Período de Inscrição</label>
                    <div class="col-8 col-sm-3">
                        <label>Data de início</label>
                        <input class="form-control date-picker" type="text" id="data_inicio" value="{{ $edital->data_inicio}}" readonly="">

                        <label>Data final</label>
                        <input class="form-control date-picker" type="text" name="data_fim" value="{{ $edital->data_fim}}" readonly="">
                    </div>
            </div>
        </div>

        <div class="row" style="margin-top: 15px">
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
                <button type="button" class="btn btn-warning" onclick="readOnlyOff()">Editar</button>
                <button class="btn btn-primary" type="submit" disabled="" id="salvar">
                    Salvar
                </button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route ('admin.edital-subs')}}" role="button">Acessar participantes incritos</a>
            </div>
        </div>

    </form>
    @push('show-scripts')
        <script type="text/javascript">
            $('.form-control date-picker').datepicker({
                format: "dd/mm/YYYY",
                language: "pt-BR"
            });
        </script>
        <script>
            function readOnlyOff(){
                var salvar = document.getElementById("salvar")
                salvar.removeAttribute("disabled");

                var inputs_elements = document.getElementsByTagName("input");
                var inputs_elements2 = document.querySelectorAll('input[readonly]');
                console.log(inputs_elements2);
                for(let i in inputs_elements2){
                    if (inputs_elements2[i].hasAttribute('readonly')){
                        inputs_elements2[i].removeAttribute("readonly");
                    }
                    else
                    {

                    }
                    /*else
                    {
                        if(typeof inputs_elements[i] === 'object' && inputs_elements[i] != null && 'setAttribute' in inputs_elements[i])
                        {
                            inputs_elements[i].setAttribute("readonly", "readonly");
                        }
                    }*/

                }
            }
        </script>
    @endpush
@endsection
