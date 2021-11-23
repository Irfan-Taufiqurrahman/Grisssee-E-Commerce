<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grissee</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <div id="header" class="text-white">
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

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <section id="landingpage" class="text-center">
                <p style="font-size: 6rem;">Center souvenir</p>
                <p style="font-family: 'poppins'; font-size: 2rem;">typical of Gresik</p>
            </section>
        </div>
    </div>

    <!-- options -->
    <section id="section-2" style="background: #222831">
        <div class="container">
            <div class="card-deck">
                <div class="pilihan">
                    <a href="#">
                        <div class="card m-5" style="max-width: 540px; background: #FFD369; 
                                border-style: solid; font-family: 'Poppins'; border-width: 2px; border-color: #EEEEEE;">
                            <div class="row no-gutters">
                                <div class="col-md-4 pl-5 pt-3">
                                    <img src="Gallery/Makanan.png" class="gambar" alt="...">
                                </div>
                                <div class="col-md-7 p-3">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Makanan</h5>
                                        <p class="card-text">Makanan Khas Gresik</p>
                                    </div>
                    </a>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="card m-5" style="max-width: 540px; font-family: 'Poppins'; background: #FFD369; border-style: solid; border-width: 2px; border-color: #EEEEEE;">
                <div class="row no-gutters">
                    <div class="col-md-4 pl-5">
                        <img src="Gallery/Minuman.png" class="gambar" style="width: 5rem;" alt="...">
                    </div>
                    <div class="col-md-7 pl-5 pt-2">
                        <div class="card-body text-white">
                            <h5 class="card-title">Minuman</h5>
                            <p class="card-text">Minuman Khas Gresik</p>
                        </div>
        </a>
        </div>
        </div>
        </div>
        <a href="#">
            <div class="card m-5" style="max-width: 540px; background: #FFD369; font-family: 'Poppins'; border-style: solid; border-width: 2px; border-color: #EEEEEE;">
                <div class="row no-gutters">
                    <div class="col-md-4 pl-3 pt-3">
                        <img src="Gallery/DamarKurung.png" class="gambar" alt="...">
                    </div>
                    <div class="col-md-7 pl-3 pt-3">
                        <div class="card-body text-white">
                            <h5 class="card-title">Kerajinan tangan</h5>
                            <p class="card-text">Kerajinan tangan khas gresik</p>
                        </div>
        </a>
        </div>
        </div>
        </div>
        </div>
        <div class="deskripsi mt-5 pl-4 pt-5">
            <img src="Gallery/Halal(1).png" class="card-img-top" style="width: 30rem;" alt="...">
        </div>
        </div>
        </div>
    </section>

</body>

</html>