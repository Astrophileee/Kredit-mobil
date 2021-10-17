<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <script src="https://cdn.tiny.cloud/1/qjdjpe961msk8jve7vsgzwo16fy21r4reggjeys6fd38jb9n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    {{-- <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user mr-2"></i> <span>{{ auth()->user()->username }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu dropdown-menu-right">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</a></button>
          </form>
        </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul> --}}
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Blog</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/admin" class="nav-link @if(request()->routeIs('admin.index')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/mobil" class="nav-link ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                CRUD Mobil
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/pembeli" class="nav-link ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                CRUD Pembeli
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/pembeli" class="nav-link ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                CRUD Paket Kredit
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/cash" class="nav-link ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                CRUD Bayar Cash
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/admin/postingan" class="nav-link ">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                CRUD Cicilan
              </p>
            </a>
          </li>
        </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mobil2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div style="margin-top: 20px">
        @if(session('success'))
          <div class="alert alert-success" role="alert" id="success-alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
      </div>
      </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{-- <h2 class="card-title">Semua Postingan</h2>--}}
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fas fa-globe-asia mr-1"></i> Diterbitkan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="#">Trash</a>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <span class="fw-bold me-1">&plus;</span> Tambah
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="post-table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode Mobil</th>
                                        <th>Nama Mobil</th>
                                        <th>Gambar</th>
                                        <th>Merk Mobil</th>
                                        <th>Type Mobil</th>
                                        <th>Warna Mobil</th>
                                        <th>Harga Mobil</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($cars as $car)
                                    <tr>
                                        <td>
                                            {{ $car->kode_mobil }}
                                        </td>
                                        <td>
                                          {{ $car->nama }}
                                      </td>
                                        <td>
                                          <img src="{{$car->imagePath()}}" alt="" loading="lazy" width="150" height="150" class="img" style="object-fit: cover; object-position: center">
                                        </td>
                                        <td>{{ $car->merk }}</td>
                                        <td>
                                            {{ $car->type }}
                                        </td>
                                        <td>
                                        <div class="mx-5" style="height: 100px; width: 100px; background-color: {{ $car->warna }};">
                                          <div class="border border-dark" style="height: 100px; width: 100px;">
                                          </div>
                                        </div>
                                        </td>
                                        <td>
                                            Rp.{{ $car->harga_mobil }}
                                        </td> 
                                        <td>
                                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $car->kode_mobil }}">
                                             Edit
                                          </button>


                                          <div class="modal fade" id="exampleModal{{ $car->kode_mobil }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <form action="{{ route('mobil2.update',$car->kode_mobil) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="createTugasModalLabel">Mobil</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body text-start">
                                                          
                                                        <div class="form-group">
                                                          <label for="title">Nama Mobil</label>
                                                          <input type="text" class="form-control" id="nama" name="nama"
                                                              placeholder="Nama Mobil" value="{{ old('nama') ?? $car->nama }}">
                                                      </div>
                                                        <div class="form-group">
                                                            <label for="title">Merk</label>
                                                            <input type="text" class="form-control" id="merk" name="merk"
                                                                placeholder="Merk Mobil" value="{{ old('merk') ?? $car->merk }}">
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="slug">Type</label>
                                                          <input type="text" class="form-control" id="type" name="type"
                                                              placeholder="Type Mobil" value="{{ old('type') ?? $car->type }}">
                                                      </div>
                                                        <div class="form-group">
                                                          <label for="title">Warna</label>
                                                          <input type="color" style="height: 100px; width:100px;" class="form-control" id="warna" name="warna"
                                                              placeholder="Warna Mobil" value="{{ old('warna') ?? $car->warna }}">
                                                      </div>
                                                        <div class="form-group">
                                                          <label for="title">Harga</label>
                                                          <input type="number" class="form-control" id="harga_mobil" name="harga_mobil"
                                                              placeholder="Harga Mobil" value="{{ old('harga_mobil') ?? $car->harga_mobil }}">
                                                      </div>
                                                        <div class="form-group">
                                                            <label for="image">Gambar Cover</label>
                                                            <input type="file" class="form-control-file" id="gambar" name="image" value="{{ old('image') ?? $car->image }}">
                                                        </div>
                                        
                                                      </div>
                                                      <div class="card-footer">
                                                          <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                      </div>
                                                      @method('PATCH')
                                                </form>
                                              </div>
                                            </div>
                                          </div>


                                            <form action="{{ route('mobil2.destroy', $car->kode_mobil) }}" class="d-inline" method="POST"
                                                onsubmit="
                                                    return confirm('Hapus Data Mobil?');
                                                ">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm m-1"><i
                                                        class="fas fa-trash-alt mr-2"></i><span>Hapus</span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ route('mobil2.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="createTugasModalLabel">Mobil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-start">
                  
              <div class="form-group">
                <label for="title">Nama Mobil</label>
                <input type="text" class="form-control" id="nama" name="nama"
                    placeholder="Nama Mobil" value="{{ old('nama')}}">
            </div>
                  <div class="form-group">
                      <label for="title">Merk</label>
                      <input type="text" class="form-control" id="merk" name="merk"
                          placeholder="Merk Mobil" value="{{ old('merk')}}">
                  </div>
                  <div class="form-group">
                    <label for="slug">Type</label>
                    <input type="text" class="form-control" id="type" name="type"
                        placeholder="Type Mobil" value="{{ old('type')}}">
                </div>
                  <div class="form-group">
                    <label for="title">Warna</label>
                    <input type="color" style="height: 100px; width:100px;" class="form-control" id="warna" name="warna"
                        placeholder="Warna Mobil" value="{{ old('warna')}}">
                </div>
                  <div class="form-group">
                    <label for="title">Harga</label>
                    <input type="number" class="form-control" id="harga_mobil" name="harga_mobil"
                        placeholder="Harga Mobil" value="{{ old('harga_mobil')}}">
                </div>
                  <div class="form-group">
                      <label for="image">Gambar Cover</label>
                      <input type="file" class="form-control-file" id="image" name="image">
                  </div>

              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div>
        </form>
      </div>
    </div>
  </div>

  

  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery -->
<script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte') }}//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte') }}/dist/js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('adminlte')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('adminlte')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('adminlte')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('adminlte')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
    $(function () {
        $('#post-table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
</script>
</body>
</html>
