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

  <script src="https://cdn.tiny.cloud/1/qjdjpe961msk8jve7vsgzwo16fy21r4reggjeys6fd38jb9n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user mr-2"></i> <span>Iqbal Maulana Asyari</span>
        </a>
        <div class="dropdown-menu dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
        </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
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
            <h1 class="m-0">Create Postingan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


                <form action="{{ route('cash.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                       <!-- Toggle status pembeli -->
                <div class="row">
                  <div class="col ml-3">
                      <div class="form-group">
                          <label>Status Pembeli</label>
                          <div class="form-check form-switch">
                            <input name="daftar_pembeli_baru" class="form-check-input" {{ old('daftar_pembeli_baru') ? 'checked' : '' }}
                            onchange="checkStatusPembeli()" type="checkbox" role="switch" id="statusPembeli" >
                          </div>
                      </div>
                  </div>
              </div>
                        <div class="card-body">
                        <div class="form-group">
                          <!-- Pembeli yang sudah ada -->
                <div class="existing-customer-section">
                  <div class="row">
                      <div class="col">
                          <div class="form-group">
                              <label for="display_ktp_pembeli">KTP Pembeli</label>
                              <div class="input-group">
                                  <input type="text" id="display_ktp_pembeli" class="form-control" readonly
                                      placeholder="No. KTP pembeli" aria-label="No. KTP pembeli"
                                      aria-describedby="button-ktp-addon" name="ktp_pembeli_lama"
                                      value="{{ old('ktp_pembeli_lama') ?? '-' }}">
                                  <div class="input-group-append">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      <span class="fw-bold me-1">&plus;</span> Pilih Pembeli
                                    </button>
                                  </div>
                              </div>
                              @error('ktp_pembeli_lama')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Nama Lengkap</label>
                              <input type="text" class="form-control" id="display_nama_pembeli"
                                  name="display_nama_pembeli" readonly value="{{ old('display_nama_pembeli') ?? '-' }}"
                                  placeholder="Nama pembeli" />
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="display_no_telp">No. Telepon</label>
                              <input type="text" class="form-control" id="display_telpon_pembeli" name="display_telpon_pembeli"
                                  readonly value="{{ old('display_telpon_pembeli') ?? '-' }}"
                                  placeholder="e.g 0812 xxxx xxxx" />
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <div class="form-group">
                              <label for="display_alamat_pembeli">Alamat</label>
                              <textarea name="display_alamat_pembeli" class="form-control" id="display_alamat_pembeli"
                                  rows="4" placeholder="Alamat pembeli"
                                  readonly>{{ old('display_alamat_pembeli') ?? '-' }}</textarea>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Pembeli baru -->
              <div class="new-customer-section">
                  <div class="row">
                      <div class="col">
                        <h2>Pembeli Baru</h2>
                          <div class="form-group">
                              <label for="nama">Nama Lengkap</label>
                              <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli"
                                  value="{{ old('nama_pembeli') ?? ($pembeli->nama_pembeli ?? '') }}" placeholder="Nama pembeli" />
                              @error('nama_pembeli')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="ktp_pembeli">KTP Pembeli</label>
                              <input type="text" class="form-control" id="ktp_pembeli" name="ktp_pembeli"
                                  value="{{ old('ktp_pembeli') ?? ($pembeli->ktp_pembeli ?? '') }}"
                                  placeholder="No. KTP pembeli" />
                              @error('ktp_pembeli')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="no_telp">No. Telepon</label>
                              <input type="text" class="form-control" id="telpon_pembeli" name="telpon_pembeli"
                                  value="{{ old('telpon_pembeli') ?? ($pembeli->telpon_pembeli ?? '') }}"
                                  placeholder="No. telepon pembeli" />
                              @error('telpon_pembeli')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <textarea name="alamat_pembeli" class="form-control" id="alamat_pembeli" rows="4"
                                  placeholder="Alamat lengkap pembeli">{{ old('alamat_pembeli') ?? ($pembeli->alamat_pembeli ?? '') }}</textarea>
                              @error('alamat_pembeli')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>
                  </div>
              </div>

                        <div class="mobil-section">
                        <div class="form-group">
                          <label>Mobil</label>
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" name="kode_mobil" id="kode_mobil" placeholder="Pilih Mobil" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <span class="fw-bold me-1">&plus;</span> Pilih Mobil
                              </button>
                            </div>
                            <input type="text" readonly class="form-control" name="merk" id="merk" placeholder="Merk Mobil">
                            <br>
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">Rp.</span>
                              <input readonly type="text" class="form-control" name="harga_mobil" id="harga_mobil" placeholder="Harga Mobil" placeholder="Harga Mobil">
                            </div>
                          </div>
                        </div>
                            <div class="form-group">
                              <label for="tgl_beli_cash">Tanggal Beli Cash</label>
                              <input type="datetime-local" class="form-control" id="tgl_beli_cash" name="tgl_beli_cash"
                                  placeholder="Tanggal Beli Cash" value="{{ old('tgl_beli_cash')}}">
                                  @error('tgl_beli_cash')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                            <div class="form-group">
                              <label for="bayar_cash">Bayar Cash</label>
                              <input type="number" class="form-control" id="bayar_cash" name="bayar_cash"
                                  placeholder="Bayar Cash" value="{{ old('bayar_cash')}}">
                                  @error('bayar_cash')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
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
  </div>

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTugasModalLabel">Pembeli</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-start">
                <table id="table-pilih-mobil" class="table table-bordered table-hover table-striped">
                  <thead>
                      <tr class="text-center">
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
                          <button type="button" class="btn btn-primary" onclick="changeMobil(event)" data-mobil="{{ $car->kode_mobil }}" data-merk="{{ $car->merk }}" data-harga="{{ $car->harga_mobil }}" data-bs-dismiss="modal">
                            <span class="fw-bold me-1">&plus;</span> Pilih
                          </button>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createTugasModalLabel">Pembeli</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-start">
                <table id="table-pilih-pembeli" class="table table-bordered table-hover table-striped">
                  <thead>
                      <tr class="text-center">
                          <th>No Ktp</th>
                          <th>Nama Pembeli</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody class="text-center">
                      @foreach ($buyers as $buyer)
                      <tr>
                          <td>
                              {{ $buyer->ktp_pembeli }}
                          </td>
                          <td>
                              {{ $buyer->nama_pembeli }}
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary" onclick="changeKtpPembeli(event)" data-ktp-pembeli="{{ $buyer->ktp_pembeli }}" data-telpon-pembeli="{{ $buyer->telpon_pembeli }}" data-alamat-pembeli="{{ $buyer->alamat_pembeli }}" data-nama-pembeli="{{ $buyer->nama_pembeli }}" data-bs-dismiss="modal">
                              <span class="fw-bold me-1">&plus;</span> Pilih
                            </button>
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


  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
  const inputMobil = document.querySelector('#kode_mobil')
  const inputMerk = document.querySelector('#merk')
  const inputHarga = document.querySelector('#harga_mobil')
  function changeMobil(e){
    let kode_mobil = e.target.getAttribute("data-mobil")
    merk= e.target.getAttribute("data-merk")
    harga_mobil= e.target.getAttribute("data-harga")

    console.log(kode_mobil)
    console.log(merk)
    console.log(harga_mobil)

    inputMobil.value = kode_mobil;
    inputMerk.value = merk;
    inputHarga.value = harga_mobil;
  }
</script>

<script>
  const inputKtp = document.querySelector('#display_ktp_pembeli')
  const inputNama = document.querySelector('#display_nama_pembeli')
  const inputTelpon = document.querySelector('#display_telpon_pembeli')
  const inputAlamat = document.querySelector('#display_alamat_pembeli')
  function changeKtpPembeli(e){
    let ktp = e.target.getAttribute("data-ktp-pembeli")
    nama = e.target.getAttribute("data-nama-pembeli")
    telpon = e.target.getAttribute("data-telpon-pembeli")
    alamat = e.target.getAttribute("data-alamat-pembeli")
    inputNama.value = nama;
    inputTelpon.value = telpon;
    inputAlamat.value = alamat;
    inputKtp.value = ktp;
  }
</script>
<script>
  const checkStatusPembeli = () => {
            if ($('#statusPembeli').is(':checked')) {
                $('.existing-customer-section').addClass('d-none');
                $('.new-customer-section').removeClass('d-none');
            } else{
                $('.new-customer-section').addClass('d-none');
                $('.existing-customer-section').removeClass('d-none');
            }}
</script>


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

        <!-- Current Page Script -->
        <script>
            $(function() {
              checkStatusPembeli();
            $('#table-pilih-pembeli').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $('#table-pilih-mobil').DataTable({
                "paging": true,
                "lengthChange": false,
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






