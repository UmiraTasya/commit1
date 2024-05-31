<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iconnet Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .bg-custom {
            background-color: #126A7C;
        }
        .home-button {
            background-color: #172858 !important;
            color: white !important;
        }
        .sidebar-custom {
            background-color: #126A7C;
            color: white;
        }
        .sidebar-custom .nav-link {
            color: white !important;
        }
        .sidebar-custom .nav-link.active {
            background-color: #172858 !important;
        }
        .footer-custom {
            background-color: #126A7C;
            color: white;
        }
    </style>
</head>

<body style="height: 3000px">
    <!--Pembuka Header -->
    <?php include "header.php"; ?>
    <!--Penutup Header -->

    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <?php include "sidebar.php"; ?>
            <!-- End Sidebar -->

            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header">
                        Ubah Layanan
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ini adalah tampilan Ubah Layanan</h5>
                        <p class="card-text">Berikut adalah data terbaru: pelanggan yang mengalami gangguan layanan, pengguna yang telah mengganti sandi mereka, mereka yang telah memperbarui atau mengubah layanan, dan mereka yang telah menonaktifkan akun mereka. 
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>
        <div class="footer-custom fixed-bottom text-center mb-2 py-2">
            Copyright 2024 Iconnet Care
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>