@extends('templates.template')

@section('title','Transaction')

@section('content')

  <!-- DataTables -->
  {{-- <link rel="stylesheet" href="{{asset('assets_backend/AdminLTE-master/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets_backend/AdminLTE-master/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets_backend/AdminLTE-master/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> --}}

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaction</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Transaction</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <a type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Add Transaction</a>
                                    <a type="button" class="btn btn-warning text-white"> <i class="fa fa-upload"></i> Export Excel</a>
                                    <a type="button" class="btn btn-danger text-white"> <i class="fa fa-pdf"></i> PDF</a>
                                    <a type="button" class="btn btn-success text-white" id="btn-import"> <i class="fa fa-download"></i> Import</a>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label " for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <a type="button" href="/user-setting/import" class="input-group-text">Upload</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Id Customer</th>
                              <th>Money</th>
                              <th>Transacttion status</th>
                              <th>Payment Type</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                            </tr>
                            </tbody>
                            <tfoot>
                                <th>Id Customer</th>
                                <th>Money</th>
                                <th>Transacttion status</th>
                                <th>Payment Type</th>
                                <th>Action</th>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<script>
    const box = document.getElementById('box');

    const btn = document.getElementById('btn-import');

    btn.addEventListener('click', function handleClick() {
        if (box.style.display === 'none') {
            box.style.display = 'block';

            btn.textContent = 'Hide div';
        } else {
            box.style.display = 'none';

            btn.textContent = 'Show div';
        }
    });

</script>

@endsection
