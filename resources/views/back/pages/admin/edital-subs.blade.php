@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Inscritos no edital')
@section('content')
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Adminstração</h4>
            <h6>Inscritos no edital</h6>
        </div>
        <div>
            <h4 class="text-blue h4">Inscritos</h4>
            <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="dt-buttons btn-group flex-wrap">
                    <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                        aria-controls="DataTables_Table_2" type="button"><span>Copy</span></button>
                    <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                        aria-controls="DataTables_Table_2" type="button"><span>CSV</span></button>
                    <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                        aria-controls="DataTables_Table_2" type="button"><span>PDF</span></button>
                    <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="DataTables_Table_2"
                        type="button"><span>Print</span></button>
                </div>
                <div id="DataTables_Table_2_filter" class="dataTables_filter">
                    <label>Search:
                        <input type="search" class="form-control form-control-sm" placeholder="Search"
                            aria-controls="DataTables_Table_2">
                    </label>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- to do
                                link para pagina do participante com todas
                                suas informações e documentos -->
                            <th scope="row">1</th>
                            <td>032.425.653-71</td>
                            <td>Ana</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>032.425.653-71</td>
                            <td>Bernado</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>032.425.653-71</td>
                            <td>Carina</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a
                            href="#" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0"
                            class="page-link"><i class="ion-chevron-left"></i></a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_2"
                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_2"
                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item next" id="DataTables_Table_2_next"><a href="#"
                            aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" class="page-link"><i
                                class="ion-chevron-right"></i></a>
                    </li>
                </ul>
            </div>

        </div>

    @endsection
    @push('tables-scripts')
        <script src="/back/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="/back/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="/back/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="/back/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="/back/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="/back/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="/back/src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="/back/src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="/back/src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="/back/src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="/back/src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="/back/vendors/scripts/datatable-setting.js"></script>
    @endpush
