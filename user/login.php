<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../template/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href=../bootstrap/css/bootstrap.min.css>

</head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <h1 class="text-bold text-white">Perpus App</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
        </div>
    </nav>
    <div class="container mt-5">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row ">
                            <div class="col-lg-12 d-none d-lg-block bg-login-image "></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        <h5>Aplikasi Perpustakaan SMKISBA</h5>
                                        <br>
                                        <br>
                                    </div>
                                    <form class="user" method="post" action="cek_login.php">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                        <hr>

                                        <div class="text-center mb-3">
                                            Belum Punya Akun ? <br><br>
                                            <a class="btn btn-success btn-user btn-block"  href="register.php">Register!</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="btn btn-warning btn-user btn-block" href="../admin/login.php">Masuk Sebagai Admin/Petugas</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../template/vendor/jquery/jquery.min.js"></script>
    <script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../template/js/sb-admin-2.min.js"></script>

</body>

</html>