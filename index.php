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

    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card my-5">
                    <div class="card-header bg-primary text-center">
                        <h1 class="text-white">Learning Management System</h1>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                                <a href=""><small id="passwordForget" class="form-text text-muted">Lupa Password?</small></a>
                            </div>
                            <div class="form-group w-100">
                                <div class="g-recaptcha" data-sitekey="6Lc7IdQUAAAAAPjCKumJ6Iyu5CADLXiAY-cbfBZI"></div>
                            </div>
                            <a href="home.php" class="btn btn-primary btn-block text-uppercase">Sign In</a>
                        </form>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="home.php" class="btn btn-block btn-outline-success text-uppercase"><i class="fab fa-google mr-2"></i> Sign in dengan Google</a>
                        <a href="home.php" class="btn btn-block btn-outline-primary text-uppercase"><i class="fab fa-facebook-f mr-2"></i> Sign in dengan Facebook</a>
                        <hr>
                        <small class="form-text text-muted">Belum memiliki akun?</small>
                        <a href="home.php" class="btn btn-block btn-outline-secondary text-uppercase">Daftarkan Akun</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>