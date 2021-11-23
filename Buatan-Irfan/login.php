<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>
    <div id="header" class="text-black">
        <div class="container">
            <div class="navbar navbar-expand-md navbar-dark bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="Gallery/Grissee.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link fas fa-shopping-cart" href="#"> Shop</a>
                            </li>
                        </ul>

                        <div class="d-flex ml-3">
                            <a class="btn btn-outline-warning w-100" href="login.php">Login</a>
                        </div>

                        <div class="d-flex ml-3">
                            <a class="btn btn-outline-success w-100" href="register.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-5">
            <div class="card" style="margin: 0 15rem 15rem;">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="tambah-aksi.php" method="post">
                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <p>Haven't an Account? <a href="Register.php">Create</a></p>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>