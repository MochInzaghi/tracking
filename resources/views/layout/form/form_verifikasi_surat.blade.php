<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Form Verifikasi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('template')}}/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template')}}/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('template')}}/dist/img/kementrian.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin.surat')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-users" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-item"></div>
          <a class="nav-link" data-widget="fullscreen" href="#">Fullscreen</a>
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">Control Sidebar</a>
          <a class="dropdown-item" a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              {{ __('Log Out') }}</a>
          <form class="d-inline mt-1 ml-200" id="logout-form" action="{{ route('logout') }}" method="POST" class="nav-link">
                @csrf
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template')}}/dist/img/kementrian.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin.surat')}}" class="d-block">ADMIN DISKOMINFO</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="{{route('admin.surat')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Form
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create.surat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Surat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Table
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('table.surat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Surat Keluar</p>
                </a>
              </li>
            </ul>
          </li>
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
            <h1 class="m-0">Form Verifikasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.surat')}}">Home</a></li>
              <li class="breadcrumb-item active">Form Verifikasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Validasi Surat</h3>
              </div>
              <form action="{{ url('admin/data-surat/'.$data_surat->id.'/store') }}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="namapenerima">Nama Pengirim Surat</label>
                    <input type="text" class="form-control" name="pengirim_surat" placeholder="Masukkan Nama Pengirim Surat">
                  
                      @error('pengirim_surat')
                        <div class="text-danger">
                            Mohon Isi Nama Pengirim Surat
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="namapenerima">Nama Penerima Surat</label>
                    <input type="text" class="form-control" name="penerima_surat" placeholder="Masukkan Nama Penerima Surat">
                  
                      @error('pengirim_surat')
                        <div class="text-danger">
                            Mohon Isi Nama Pengirim Surat
                        </div>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="seksi">Seksi</label>
                      <select id="seksi" class="form-control" name="seksi">
                        <option selected disabled>Seksi :</option>
                        <option value="Seksi Kemitraan, Komunikasi & Kelembagaan">Seksi Kemitraan, Komunikasi & Kelembagaan</option>
                        <option value="Seksi Komunikasi Publik">Seksi Komunikasi Publik</option>
                        <option value="Seksi Pemberdayaan Komunikasi">Seksi Pemberdayaan Komunikasi</option>
                        <option value="Seksi Statistik">Seksi Statistik</option>
                        <option value="Seksi Layanan Informasi">Seksi Layanan Informasi</option>
                        <option value="Seksi Pengelolaan Informasi">Seksi Pengelolaan Informasi</option>
                        <option value="Seksi Persandian">Seksi Persandian</option>
                        <option value="Seksi Pengembangan Aplikasi Informatika">Seksi Pengembangan Aplikasi Informatika</option>
                        <option value="Seksi Pemberdayaan Aplikasi Informatika">Seksi Pemberdayaan Aplikasi Informatika</option>
                        <option value="Seksi Pengendalian & Pengawasan Infrastruktur TIK">Seksi Pengendalian & Pengawasan Infrastruktur TIK</option>
                        <option value="Seksi Pengembangan Infrastruktur TIK">Seksi Pengembangan Infrastruktur TIK</option>
                        <option value="Seksi Pengelolaan Data Center">Seksi Pengelolaan Data Center</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="bukti">Bukti Foto Surat di Terima</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input type="file" class="form-control" name="bukti" id="bukti" onchange="previewImage()">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Verifikasi</button>
                </div>
              </form>
            </div>
            
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Dinas Komunikasi dan Informatika Kabupaten Malang</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

  function previewImage(){
    const image = document.querySelector('#bukti');
    const imgPreview = document.querySelector('.img-preview');
  
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('template')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('template')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('template')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('template')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('template')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('template')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('template')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('template')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('template')}}/dist/js/pages/dashboard.js"></script>
</body>
</html>
