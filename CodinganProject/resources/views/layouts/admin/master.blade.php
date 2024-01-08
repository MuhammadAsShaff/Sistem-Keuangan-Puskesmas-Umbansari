<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
  <meta name="keywords"
    content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  

  <title>Sistem Keuangan Puskesmas</title>
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  
<style>
  .user-profile-card {
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    transition: transform 0.3s ease-in-out;
  }

  .user-profile-card:hover {
    transform: scale(1.05);
  }

  .profile-details {
    margin-bottom: 15px;
  }

  .profile-details p {
    font-size: 16px;
    margin-bottom: 8px;
  }

  .buttons-container {
    display: flex;
    justify-content: space-between;
  }

  .dropdown-divider {
    margin: 15px 0;
    border-top: 1px solid #ddd;
  }

  .btn-primary-light,
  .btn-secondary {
    padding: 8px 15px;
    font-size: 14px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }

  .btn-primary-light:hover,
  .btn-secondary:hover {
    background-color: #267bb8;
    color: #fff;
  }
  .btn-primary-light.btn-sm:hover {
    background-color: transparent;
    color: inherit;
}
</style>
<style>
  #data-table {
    width: 100%;
    margin-top: 20px;
  }

  #data-table th {
    background-color: #f2f2f2;
  }

  #data-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  #data-table tbody tr:hover {
    background-color: #e6e6e6;
  }

  .btn-action {
    margin-right: 5px;
  }

  /* Atur ukuran ikon pada tombol edit dan hapus */
  .btn-action .feather {
    width: 18px;
    height: 18px;
    vertical-align: text-bottom;

  }
</style>

  <title>Sistem Keuangan Puskesmas</title>
  <!-- Google font-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha384-dJzMH3sFsIWID1O/QMRW6eOpdGhpPZZLhFXT3pb9d8Tm2mi2GX6z4SzFNPX8iBCe" crossorigin="anonymous">

  <!-- DataTables CSS -->
<style>
    /* Memberikan jarak antara tabel dan pagination */
    #data-table {
        margin-top: 20px;
    }

    /* Memberikan jarak antara tabel dan tombol previous dan next */
    #data-table {
        margin-right: 10px;
        /* Sesuaikan dengan preferensi desain Anda */
    }

    /* Memberikan jarak antara info entries dan tabel di atasnya */
    #data-table {
        margin-bottom: 20px;
        /* Sesuaikan dengan preferensi desain Anda */
    }
    .btn-group {
  display: flex;
}

.btn-group .btn {
  flex: 1;
  margin-right: 5px;
}

</style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <!-- Font Awesome-->
  @includeIf('layouts.admin.partials.css')
</head>

<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader"></div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @includeIf('layouts.admin.partials.header')
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
      <!-- Page Sidebar Start-->
      @includeIf('layouts.admin.partials.sidebar')
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <!-- Container-fluid starts-->
        @yield('content')
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->

    </div>
  </div>
  <!-- latest jquery-->
  @includeIf('layouts.admin.partials.js')

  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script>
  // Inisialisasi Feather Icons
  feather.replace();
</script>

<script>
  $(document).ready(function () {
      $('#editProfileModal').modal();
    });
</script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</body>

</html>