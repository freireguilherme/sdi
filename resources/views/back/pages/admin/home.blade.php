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
                @foreach ($editais as $edital)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $edital->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($edital->data_inicio)) . ' a ' . date('d/m/Y', strtotime($edital->data_fim)) }}</td>
                        <td style="color:red">{{ $edital->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
