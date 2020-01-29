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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/53871d42e6.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><b>Basis Data 1</b></div>
            <div class="list-group list-group-flush">
                <a href="page1.php" class="list-group-item list-group-item-action bg-light"><b>Pengenalan SQL</b></a>
                <div class="list-group list-group-flush">
                    <a href="page1.php" class="list-group-item list-group-item-action bg-primary text-white">Tipe Data
                        Pada
                        SQL</a>
                    <a href="page2.php" class="list-group-item list-group-item-action bg-light">Mendefinisikan Tabel</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Primary dan Foreign Key</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Mengubah dan Menghapus Tabel</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Menampilkan Data Pada Tabel</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Menmpilkan Data Dengan
                        Kondisi</a>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                <button class="btn btn-light" id="menu-toggle"><i class="fas fa-book-open"></i></button>
                <a class="navbar-brand text-white mr-auto ml-2" href="#"><b>Learning Management System</b></a>
                <button class="navbar-toggler bg-light" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="home.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="kelas.php">Kelas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <h3 class="mt-4">Tipe Data Pada SQL</h3>
                <p>Untuk nantinya dapat mendefinisikan sebuah tabel pada database SQL dibutuhkan tipe data yang harus
                    ditentukan
                    agar sesuai dengan data yang disimpan pada setiap atribut tabel.</p>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tipe Data</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>varchar(n)</td>
                            <td>Menyimpan data string dengan panjang yang akan menyesuaikan sesuai variabelnya. n
                                ditentukan oleh user</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>int</td>
                            <td>Integer menyimpan data angka bilangan bulat.</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Float(n)</td>
                            <td>Menyimpan data angka desimal dengan n ditentukan oleh user sebagai seberapa banyak angka
                                dibelakang koma</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-5" style="position:relative;padding-top:56.25%;">
                    <iframe src="https://www.youtube.com/embed/8swA-PqlEP0" frameborder="0" allowfullscreen
                        style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                </div>
                <div class="d-flex flex-column mt-5">
                    <b>File Pendukung</b>
                    <div class="p-2 bg-dark text-white"><i class="far fa-file-pdf"></i> - <a href="/ch3 SQL.pdf"
                            download="Chapter 3 - SQL.pdf" class=""><b>Chapter 3 - SQL.pdf</b></a></div>
                </div>
                <div class="row justify-content-end mt-4 mb-4">
                    <a href="page2.php" class="btn btn-outline-primary" role="button"
                        aria-disabled="true">Selanjutnya</a>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>