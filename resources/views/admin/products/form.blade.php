@extends('admin.layout')

@section('page_css')
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}" />
@endsection

@section('content')
    <header class="page-header">
        <h2>Product Forms</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Advanced</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->
    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Nhập thông tin sản phẩm</h2>
                </header>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal form-bordered" action="/admin/products" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputDefault" name="name">
                                @error('name')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Price</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="inputDefault" name="price">
                                @error('price')
                                    <div class="text-danger">* {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Description</label>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Thumbnail</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputDefault" name="thumbnail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="inputDefault">Category</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputDefault" name="categoryId">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6 col-xs-11">
                                <button class="btn btn-sm btn-primary colorpicker-element">
                                    Submit
                                </button>
                                <button class="btn btn-sm btn-default colorpicker-element">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('page_js')
    <script src="{{URL::asset('assets/vendor/select2/select2.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}"></script>

    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.default.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
    <script src="{{URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
@endsection

