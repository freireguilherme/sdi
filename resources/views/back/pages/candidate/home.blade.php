@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Home page')
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">Editais</h4>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Edital</th>
                    <th scope="col">Data</th>
                    <th scope="col">Situação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Chamada para seleção de coordenador</td>
                    <td>13/01 a 13/02</td>
                    <td style="color:red">Em andamento</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Processo seletivo para ingresso</td>
                    <td>21/12 a 23/01</td>
                    <td style="color:red">Encerrado</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
