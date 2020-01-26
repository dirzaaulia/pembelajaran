<!DOCTYPE html>
<html lang="en">

<head>

    <title>Pembelajaran</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <!-- Bootstrap core JavaScript 
    <script src="vendor/jquery/jquery.min.js"></script>
    < <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><b>Introduction To SQL</b></div>
            <div class="list-group list-group-flush">
                <a href="page1.php" class="list-group-item list-group-item-action">Tipe Data Pada SQL</a>
                <a href="page2.php" class="list-group-item list-group-item-action bg-primary text-white">Mendefinisikan
                    Tabel</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                <button class="btn btn-light" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="#">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Kelas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                James Bond
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Akun</a>
                                <a class="dropdown-item" href="#">Pengaturan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container">
                <h3 class="mt-4">Mendefinisikan Tabel</h3>
                <p>Query SQL untuk mendefinisikan tabel yaitu dengan perintah <code>create table</code></p>
                <div class="card">
                    <div class="card-body"><code>create table</code> namaTabel (namaAtribut1 tipedata1(n1), namaAtribut2
                        tipedata2(n2), ... ,namaAtribut3m tipedata3(n3))</div>
                </div>
                <br>
                <p>Sebagai contoh sebagai berikut ini</p>
                <div class="card">
                    <div class="card-body"><code>create table</code> mahasiswa (nim int, nama varchar(50))</div>
                </div>
                <div class="mt-5" style="position:relative;padding-top:56.25%;">
                    <iframe src="https://www.youtube.com/embed/nckseQJ1Nlg" frameborder="0" allowfullscreen
                        style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                </div>
                <div class="alert alert-secondary mt-5">
                    <strong>Latihan!</strong><br>
                    <p>Definisikan tabel <b>Barang</b> dibawah ini dengan query SQL</p>
                    <table class="table table-sm table-bordered table-light">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Atribut</th>
                                <th scope="col">Tipe Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            </style>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nama</td>
                                <td>varchar(20)</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jumlah</td>
                                <td>int</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Deskripsi</td>
                                <td>varchar(50)</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Jawaban</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Ketik jawaban" aria-label="Jawaban"
                            aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <b>File Pendukung</b>
                    <div class="p-2 bg-dark text-white">PDF - Download Link</div>
                </div>
                <div class="row justify-content-end mt-4 mb-4">
                    <button class="btn btn-outline-primary" id="menu-toggle">Selanjutnya</button>
                </div>
            </div>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>