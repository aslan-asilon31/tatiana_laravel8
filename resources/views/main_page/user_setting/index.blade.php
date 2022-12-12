@extends('templates.template')

@section('title','User Setting')

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
                    <h1 class="m-0">User Setting</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Setting</li>
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
                                    <a type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Add User</a>
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
                              <th>Name</th>
                              <th>Email</th>
                              <th>Status</th>
                              <th>Image</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @forelse ($users as $user)
                                <tr>
                                    {{-- <td class="text-center">
                                        <img src="{{ Storage::url('public/blogs/').$user->image }}" class="rounded" style="width: 150px">
                                    </td> --}}
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td class="text-center">
                                        {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('blog.destroy', $user->id) }}" method="POST">
                                            <a href="{{ route('blog.edit', $user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form> --}}
                                    </td>
                                    <td>{{ $user->image }}</td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data User belum Tersedia.
                                  </div>
                              @endforelse

                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                          </table>
                          {{ $users->links() }}
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
