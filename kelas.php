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

    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/53871d42e6.js" crossorigin="anonymous"></script>




</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                
                <div class="container">
                    <button class="navbar-toggler bg-light ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <a class="navbar-brand text-white" href="#"><b>Learning Management System</b></a>
                        </ul>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link text-white" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="kelas.php"><b>Kelas</b></a>
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
                </div>
            </nav>

            <div class="container">
                <div class="row mt-5">
                    <h3 class="text-primary">Kelas Yang Diikuti</h3>
                </div>
                <div class="row mt-2">
                    <span><b>Aktivitas Terakhir</b></span>
                </div>
                <div class="row mt-2">
                    <div class="card w-100">
                        <div class="card-header bg-primary text-white">
                            Basis Data 1
                        </div>
                        <div class="card-body">
                            <p class="card-text">Di kelas Basis Data 1, kamu akan diperkenalkan dengan relational
                                database, aljabar relational, mendesain database beserta gambaran relasinya pada
                                Entity Relationship Diagram serta bagaimana mengimplementasikannya.
                            </p>
                            <a href="page1.php" class="btn btn-outline-primary btn-sm ml-auto" role="button"
                                aria-pressed="true">Lanjutkan</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Terakhir kali diikuti 25 Januari 2020 - 16:06 WIB</small>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <span><b>Mata Kuliah Yang Diikuti</b></span>
                </div>
                <div class="row mt-2">
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-header bg-primary text-white">Basis Data 2</div>
                            <div class="card-body">
                                <p class="card-text">Setelah kamu mendapatkan pengenalan database pada Basis Data 1
                                    kemudian di Basis Data 2 ini kamu akan mengimplementasikan database tersebut secara
                                    nyata pada suatu Database Management System (DBMS) dan bagaimana cara - cara
                                    implementasinya.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm ml-auto" role="button"
                                    aria-pressed="true">Lanjutkan</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir kali diikuti 24 Januari 2020 - 13:03 WIB</small>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 10%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary text-white">Algoritma dan Pemrograman</div>
                            <div class="card-body">
                                <p class="card-text">Pada kelas Algoritma dan Pemrograman ini kamu akan diperkenalkan
                                    dengan apa itu algoritma dan mengimplementasikan algoritma tersebut dengan suatu
                                    bahasa pemrograman.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm ml-auto" role="button"
                                    aria-pressed="true">Lanjutkan</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir kali diikuti 23 Januari 2020 - 12:02 WIB</small>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 5%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary text-white">Struktur Data</div>
                            <div class="card-body">
                                <p class="card-text">Pada kelas Struktur Data kamu akan mempelajari bagaimana melakukan pengolahan data dengan berbagai jenis struktur data seperti Array, Queue dan Linked List dan bagaimana cara mengimplementasikannya.</p>
                                <a href="#" class="btn btn-outline-primary btn-sm ml-auto" role="button"
                                    aria-pressed="true">Lanjutkan</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir kali diikuti 22 Januari 2020 - 11:01 WIB</small>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 1%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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