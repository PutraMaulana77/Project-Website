<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Pembelajaran</title>
  <link rel="stylesheet" href="{{ asset('css/Badan.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .navbar {
      background: linear-gradient(to right, #66FF99
      , #66ffff);
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .navbar-toggler-icon {
      background-color: #fff;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #fff;
      position: relative;
      transition: all 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover::before {
      transform: scaleX(1);
      width: 90%;
    }

    .navbar-nav {
      margin-left: auto;
    }

    .navbar-nav .nav-link::before {
      content: "";
      display: block;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background-color: #adcfd8;
      transform-origin: 0 0;
      transition: width 0.3s ease-in-out;
    }

    .container {
      max-width: 800px;
      padding: 20px;
      background-color: #fff;
      margin: 20px auto;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
      color: #3498db;
      text-align: center;
    }

    a.add-link {
      color: #3498db;
      text-decoration: none;
    }

    table {
      width: 100%;
    }

    th, td {
      text-align: center;
    }

    @media print {
      body {
        background-color: #fff;
      }

      .navbar, .btn, .d-flex {
        display: none;
      }
    }

    .print-container {
      margin: 20px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/User/home">USERS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/User/index">Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/User/index2">Mapel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/User/index3">Pembelajaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/User/about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container">
        <h2>DATA PEMBELAJARAN</h2>

        <div class="container mt-3">
            <form action="/User/index3/caripemb" method="GET" class="d-flex">
                <input class="form-control me-2" type="text" name="cari" placeholder="Cari Hari ..." aria-label="Search" value="{{ old('cari') }}">
                <button class="btn btn-outline-success" class="spinner-border spinner-border-sm" type="submit">Cari</button>
                @if(request()->has('cari'))
                <a href="/User/index3" class="btn btn-danger ms-2">X</a>
                @endif
            </form>
        </div>

        <div class="container mt-3">
            <form action="" method="get" class="d-flex">
               
                <!-- TOMBOL PRINT/CETAK -->
                <a href="/table3" target="_blank" class="btn btn-primary ms-2">Cetak</a>
            </form>
        </div>

        <div class="table-responsive">
            <table id="myTable" class="table table-striped table-bordered mt-1">
                <thead>
                    <tr>
                        <th>ID Mapel</th>
                        <th>Guru Pengajar</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Hari</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($pembelajaran as $p)
                    <tr>
                        <td>{{ $p->ID_Mapel }}</td>
                        <td>{{ $p->Guru_Pengajar }}</td>
                        <td>{{ $p->Jam_Mulai }}</td>
                        <td>{{ $p->Jam_Selesai }}</td>
                        <td>{{ $p->Hari }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>