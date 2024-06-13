<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apakah Yakin? ;)</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .bg-body-tertiary {
      background: linear-gradient(to right, #fc5c7d, #6a82fb);
    }
    .text-white {
      color: #fff;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <center>
        <div class="card-header bg-body-tertiary text-white">LogOut</div>
  </center>
        <div class="card-body text-center">
          <p>



          Terima kasih telah menggunakan layanan kami. Sampai jumpa lagi!
          </p>
          <a href="#" class="btn btn-secondary ml-2" onclick="goBack()">Kembali</a>
          <button class="btn btn-danger" onclick="confirmLogout()">Logout</button>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script JavaScript -->
<script>
function confirmLogout() {
  // Tampilkan pop-up konfirmasi
  var confirmLogout = confirm("Apakah Anda yakin ingin logout?");

  // Jika pengguna setuju, lakukan logout
  if (confirmLogout) {
    // Lakukan proses logout sesuai kebutuhan

    // Alihkan ke halaman login setelah logout
    window.location.href = "index.php";
  }
}

function goBack() {
  window.history.back();
}
</script>

</body>
</html>
