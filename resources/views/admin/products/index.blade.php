@extends('admin.layout')

@section('page_css')
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
@endsection

@section('content')
    <header class="page-header">
        <h2>List Product</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Tables</span></li>
                <li><span>Advanced</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Danh sách product hiện có</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-default">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr class="gradeU">
                        <td>{{$item->id}}</td>
                        <td><img class="circular-bar" width="100px" src="{{$item->thumbnail}}" alt="{{$item->name}}"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>Thêm sửa xoá</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row datatables-footer">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_info" id="datatable-default_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_paginate paging_bs_normal" id="datatable-default_paginate">
{{--                        {!! $list->links() !!}--}}
                        @include('pagination.default', ['paginator' => $list])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: page -->
@endsection

@section('page_js')
{{--    <script src="{{URL::asset('assets/vendor/select2/select2.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>--}}

{{--    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>--}}
{{--    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>--}}
@endsection

