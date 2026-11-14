<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }
        .brand-section {
            background-color: #162d59;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5">
                <div class="card login-card">
                    <div class="brand-section text-center p-4">
                        <i class="bi bi-book-half fs-1 text-warning"></i>
                        <h4 class="mt-2 mb-0 fw-bold">ARIES DIGITAL</h4>
                        <small class="text-light opacity-75">Sistem Informasi & Manajemen Perpustakaan</small>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">
                        <h5 class="fw-bold text-dark mb-1">Selamat Datang</h5>
                        <p class="text-muted small mb-4">Silahkan Login menggunakan akun petugas atau anggota</p>

                        <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger d-flex align-items-center py-2 mb-3" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <div class="small"><?= $this->session->flashdata('error'); ?></div>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('index.php/login/aksi_login'); ?>" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label fw-semibold small">Username / ID Anggota</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-person"></i></span> 
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan username" required>  
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold small">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i class="bi bi-eye" id="eyeIcon"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="d-grid mt-4">
                                <button class="btn btn-primary py-2 fw-semibold" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            eyeIcon.className = isPassword ? 'bi bi-eye-slash' : 'bi bi-eye';
        });
    </script>
</body>
</html>