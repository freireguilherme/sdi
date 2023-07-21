@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Registrar')
@section('content')
    <form action="{{ route('candidatos.store') }}" method="POST">
        @csrf
        <div class="pd-20 card-box mb-30">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nome</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" placeholder="Seu nome completo" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="exemplo@exemplo.com" type="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <!-- aqui, ao inves de sexo, gênero. Genero é como a pessoa se vê -->
                    <label class="col-sm-12 col-md-2 col-form-label">Qual o seu gênero</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                            <option>Femino</option>
                            <option>Masculino</option>
                            <option>Outro(Qual?)</option>
                            <option>Prefiro não dizer</option>
                        </select>
                        <!-- caso Outro, habilitar -->
                        <input class="form-control" type="text" name="sexo" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Telefone</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="" type="tel" name="telefone">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nome da mãe</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="text" name="nome_da_mae">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Data de nascimento</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control date-picker" placeholder="Escolha uma data ou digite" type="text" name="data_nascimento">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Número do CPF</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="text" name="cpf">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Número do RG</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="text" name="rg">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Órgão expedidor</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="text" name="rg_orgao_expedidor">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Data de emissão</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control date-picker" placeholder="Escolha uma data ou digite" type="text" name="rg_data_emissao">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Endereço</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="text" name="endereço">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Escolaridade</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" id="exampleFormControlSelect1" name="escolaridade">
                            <option>Ensino Médio Completo</option>
                            <option>Ensino Superior Inconpleto</option>
                            <option>Ensino Superior Completo</option>
                            <option>Mestre</option>
                            <option>Doutor</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Vínculo</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control"  type="text" name="vinculo">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Senha</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="Sua senha" type="password" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Confirme a senha</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" value="Sua senha" type="password" name="password_confirm">
                    </div>
                </div>

        </div>
        <div class="actions clearfix" style="padding: 10px">
            <ul role="menu" aria-label="Pagination">
                <button class="btn btn-primary" type="submit">
                    Cadastrar
                </button>
                <button type="button" class="btn btn-danger">
                    Cancelar
                </button>
            </ul>
        </div>
    </form>
@endsection

