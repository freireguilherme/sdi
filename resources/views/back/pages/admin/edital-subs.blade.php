@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Inscritos no edital')
@section('content')
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Adminstração</h4>
            <p class="mb-0">
                Inscritos no edital</p>
        </div>
        <div class="pb-20">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline collapsed" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row"><th class="table-plus datatable-nosort sorting_asc" rowspan="1" colspan="1" aria-label="Name">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="display: none;">Address</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start Date: activate to sort column ascending" style="display: none;">Start Date</th><th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="display: none;">Action</th></tr>
                </thead>
                <tbody>












                <tr role="row" class="odd">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Gemini</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>20</td>
                        <td>Gemini</td>
                        <td style="display: none;">2829 Trainer Avenue Peoria, IL 61602</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Sagittarius</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>25</td>
                        <td>Gemini</td>
                        <td style="display: none;">2829 Trainer Avenue Peoria, IL 61602</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>20</td>
                        <td>Sagittarius</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>18</td>
                        <td>Gemini</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Sagittarius</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Sagittarius</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="odd">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Gemini</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr><tr role="row" class="even">
                        <td class="table-plus sorting_1" tabindex="0">Andrea J. Cagle</td>
                        <td>30</td>
                        <td>Gemini</td>
                        <td style="display: none;">1280 Prospect Valley Road Long Beach, CA 90802</td>
                        <td style="display: none;">29-03-2018</td>
                        <td style="display: none;">
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1-10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="ion-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="ion-chevron-right"></i></a></li></ul></div></div></div></div>
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
