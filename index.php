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

<body class="bg-primary">
    <div class="container">
        <div class="row d-flex justify-content-center mt-5"></div>
        <div class="row d-flex justify-content-center mt-5"></div>
        <div class="row d-flex justify-content-center mt-5 text-white">
            <h1>Learning Management System</h1>
        </div>
    </div>
    <div class="container w-25 mt-3">
        <div class="row d-flex justify-content-center align-self-center bg-white" style="border-radius: 1%;">
            <form class="mt-5 mb-5 w-75">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                        placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <a href="#" class="text-decoration-none">
                        <small id="passwordHelp" class="form-text text-muted">Lupa Password?</small>
                    </a>
                </div>
                <a href="home.php" class="btn btn-primary btn-block"><b>Login</b></a>
                <hr class="w-100">
                <a href="home.php" class="btn btn-outline-primary btn-block"><i class="fab fa-facebook-square"></i><b> | Login dengan Facebook</b></a>
                <a href="home.php" class="btn btn-outline-success btn-block"><i class="fab fa-google"></i><b> | Login dengan Google</b></a>
            </form>
        </div>
    </div>
</body>

</html>