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
        <div class="collapse collapse-box" id="basic-table">
            <div class="code-box">
                <div class="clearfix">
                    <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#basic-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                    <a href="#basic-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
                </div>
                <pre><code class="xml copy-pre hljs" id="basic-table-code">
                    <span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table"</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">thead</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"col"</span>&gt;</span>#<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">thead</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;<span class="hljs-name">th</span> <span class="hljs-attr">scope</span>=<span class="hljs-string">"row"</span>&gt;</span>1<span class="hljs-tag">&lt;/<span class="hljs-name">th</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
                    <span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
            </code></pre>
            </div>
        </div>
    </div>
@endsection
