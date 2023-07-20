@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Inscritos no edital')
@section('content')
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Adminstração</h4>
        @section('sub-title')
            <p class="mb-0">
                Inscritos no edital</p>
        @endsection
    </div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table with Export Buttons</h4>
                    </div>
                    <div class="pb-20">
                        <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="dt-buttons btn-group flex-wrap"> <button
                                    class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"
                                    aria-controls="DataTables_Table_2" type="button"><span>Copy</span></button>
                                <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"
                                    aria-controls="DataTables_Table_2" type="button"><span>CSV</span></button>
                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"
                                    aria-controls="DataTables_Table_2" type="button"><span>PDF</span></button>
                                <button class="btn btn-secondary buttons-print" tabindex="0"
                                    aria-controls="DataTables_Table_2" type="button"><span>Print</span></button>
                            </div>
                            <div id="DataTables_Table_2_filter" class="dataTables_filter"><label>Search:<input
                                        type="search" class="form-control form-control-sm" placeholder="Search"
                                        aria-controls="DataTables_Table_2"></label></div>
                            <table
                                class="table hover multiple-select-row data-table-export nowrap dataTable no-footer dtr-inline collapsed"
                                id="DataTables_Table_2" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="table-plus datatable-nosort sorting_disabled" rowspan="1"
                                            colspan="1" aria-label="Name">Name</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_2"
                                            rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending"
                                            aria-sort="descending">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                            rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                            rowspan="1" colspan="1"
                                            aria-label="Address: activate to sort column ascending">Address</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                            rowspan="1" colspan="1"
                                            aria-label="Start Date: activate to sort column ascending">Start Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                            rowspan="1" colspan="1"
                                            aria-label="Salart: activate to sort column ascending"
                                            style="display: none;">Salart</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr role="row" class="odd">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">30</td>
                                        <td>Gemini</td>
                                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">30</td>
                                        <td>Sagittarius</td>
                                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">30</td>
                                        <td>Sagittarius</td>
                                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">30</td>
                                        <td>Sagittarius</td>
                                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">30</td>
                                        <td>Gemini</td>
                                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">30</td>
                                        <td>Gemini</td>
                                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">30</td>
                                        <td>Gemini</td>
                                        <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">25</td>
                                        <td>Gemini</td>
                                        <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="table-plus" tabindex="0">Gloria F. Mead</td>
                                        <td class="sorting_1">25</td>
                                        <td>Sagittarius</td>
                                        <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="table-plus" tabindex="0">Andrea J. Cagle</td>
                                        <td class="sorting_1">20</td>
                                        <td>Gemini</td>
                                        <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                        <td>29-03-2018</td>
                                        <td style="display: none;">$162,700</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_2_previous"><a href="#"
                                            aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0"
                                            class="page-link"><i class="ion-chevron-left"></i></a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0"
                                            class="page-link">2</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_2_next"><a
                                            href="#" aria-controls="DataTables_Table_2" data-dt-idx="3"
                                            tabindex="0" class="page-link"><i class="ion-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Export Datatable End -->

            </div>
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
