<!DOCTYPE html>
<html lang="en">

<head>

    <title>Pembelajaran</title>

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

        <!-- Sidebar -
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><b>Introduction To SQL</b></div>
      <div class="list-group list-group-flush">
        <a href="page1.php" class="list-group-item list-group-item-action bg-dark text-white">Tipe Data Pada SQL</a>
        <a href="page2.php" class="list-group-item list-group-item-action bg-light">Mendefinisikan Tabel</a>
      </div>
    </div> -->
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom">
                <!-- <button class="btn btn-light" id="menu-toggle"><span class="navbar-toggler-icon"></span></button> -->

                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        </ul>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="kelas.php"><b>Kelas</b></a>
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
                            <div class="row">
                                <span class="text-center ml-3 mt-1"><b>Basis Data 1</b></span>
                                <a href="page1.php" class="btn btn-outline-light btn-sm ml-auto" role="button" aria-pressed="true">Lanjutkan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.ASJLFJSALHFSAJLHASFDLKJASLHFASLKFLSKAJFJLKSA</p>
                                <a href="#" class="btn btn-outline-primary btn-sm ml-auto" role="button" aria-pressed="true">Lanjutkan</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.ASJLFJSALHFSAJLHASFDLKJASLHFASLKFLSKAJFJLKSA</p>
                                <a href="#" class="btn btn-outline-primary btn-sm ml-auto" role="button" aria-pressed="true">Lanjutkan</a>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.ASJLFJSALHFSAJLHASFDLKJASLHFASLKFLSKAJFJLKSA</p>
                                <a href="#" class="btn btn-outline-primary btn-sm ml-auto" role="button" aria-pressed="true">Lanjutkan</a>
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