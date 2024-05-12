<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location:FormLogin.php");
        exit();
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

        /* Bootstrap Icons */
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");
    </style>
    <script>
        function validateForm() {
            var berat_badan = document.getElementsByName("berat_badan")[0].value;
            var tinggi_badan = document.getElementsByName("tinggi_badan")[0].value;
            
            if (berat_badan === "" || tinggi_badan === "") {
                alert("Tidak bisa dihitung, silahkan isi semua form.");
                return false;
            }
        }
    </script>
 
</head>
<body>

<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <img src="Logo.png" alt="...">
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                    <!-- Menu -->
                    
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Aplikasi BMI</h1>
                        </div>
                    </div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0"></ul>
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <form method="POST" onsubmit="return validateForm();">
                <div class="row g-6 mb-6">
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Berat Badan</span>
                                        <span class="h3 font-bold mb-0"><input type="text" name="berat_badan" placeholder="0 Kg" class="form-control" aria-describedby="addon-wrapping"></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-person-arms-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Tinggi Badan</span>
                                        <span class="h3 font-bold mb-0"><input type="text" name="tinggi_badan" placeholder="0 Kg" class="form-control" aria-describedby="addon-wrapping"></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-person-standing"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn d-inline-flex btn-sm btn-primary mx-1" type="submit" name="hitung">Hitung Nilai BMI</button>
             
                <br><br>
                </form>
                
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Hasil Perhitungan</h5>
                    </div>

                    <div class="table-responsive">
        <table class="table table-hover table-nowrap">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Nilai BMI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a class="text-heading font-semibold">
                        <?php
                        if (isset($_POST['hitung'])) {
                            $berat_badan = $_POST['berat_badan'];
                            $tinggi_badan = $_POST['tinggi_badan'];
                        
                            if (empty($berat_badan) || empty($tinggi_badan)) {
                                echo "Isi semua kolom!";
                            } else {
                                // Hitung BMI
                                $tinggi_badan_meter = $tinggi_badan / 100; // Konversi tinggi ke meter
                                $bmi = $berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);
                        
                                if (isset($bmi)) {
                                    if ($bmi < 18.5) {
                                        echo "Kurus";
                                    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                                        echo "Normal";
                                    } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
                                        echo "Berlebihan";
                                    } elseif ($bmi >= 30.0) {
                                        echo "Obesitas";
                                    }
                                }
                            }
                        }                        
                        ?>
                        </a>
                    </td>
                    <td>
                    <?php
                            if (isset($_POST['hitung'])) {
                                $berat_badan = $_POST['berat_badan'];
                                $tinggi_badan = $_POST['tinggi_badan'];
                            
                                // Hitung BMI
                                $tinggi_badan_meter = $tinggi_badan / 100; // Konversi tinggi ke meter
                                $bmi = $berat_badan / ($tinggi_badan_meter * $tinggi_badan_meter);
                            
                                if (isset($bmi)) {
                                    echo number_format($bmi, 2) . "<br>";
                            
                                }
                            }
                            
                            ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Kode PHP Anda -->

</body>
</html>
