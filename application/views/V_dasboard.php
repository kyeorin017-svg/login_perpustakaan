<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ARIES DIGITAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-book-half text-warning me-2"></i>ARIES DIGITAL
            </a>
            <div class="d-flex align-items-center text-white">
                <div class="me-3 text-end">
                    <div class="fw-semibold small"><?= $this->session->userdata('nama'); ?></div>
                    <div class="opacity-75" style="font-size: 0.75rem;"><?= $this->session->userdata('role'); ?></div>
                </div>
                <a href="<?= base_url('index.php/login/logout'); ?>" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-box-arrow-right me-1"></i>Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="alert alert-success border-0 shadow-sm">
            <h5 class="alert-heading fw-bold mb-1">Login Berhasil!</h5>
            <p class="mb-0 small">Selamat datang kembali, <strong><?= $this->session->userdata('nama'); ?></strong>. Anda berhasil masuk menggunakan autentikasi database CodeIgniter.</p>
        </div>
    </div>
</body>
</html>