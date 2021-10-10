<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Toko Online</title>



  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/fontawesome/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/adminlte.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/bootstrap-4.min.css') ?>" rel="stylesheet">


</head>
<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('Home') ?>">Toko Pak Rohmat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?= base_url('Home') ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i>Account</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown04">
                <li><a class="dropdown-item" href="#">Login</a></li>
                <li><a class="dropdown-item" href="#">Register</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><i class="fas fa-shopping-cart active"></i></a>
            </li>
          </ul>
          <form>
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>

  </header>

  <main>

    <div class="container mt-5">
      <div class="card">
        <div class="card-header">List Cart</div>
        <div class="card-body">
          Keranjang belanja Anda sedang kosong. <a href="<?= base_url('Home')?>" class="btn btn-success">Belanja Yuk</a>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
    </div>
  </footer>


  <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>
  <script src="<?= base_url('assets/jquery-3.6.0.min.js') ?>"></script>
  <script src="<?= base_url('assets/adminlte.min.js') ?>"></script>
  <script src="<?= base_url('assets/sweetalert2.min.js') ?>"></script>

  <script ">
    $(function() {
     var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
     $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Berhasil Add Barang.'
      })
    });

   });
 </script>

</body>
</html>