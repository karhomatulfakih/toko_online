<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Karisma Academy">
    <meta name="description" content="Karisma Academy adalah toko online yang menjual berbagai macam alat elektronik.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="karisma academy, store, alat elektronik, toko online">

    <title>
        <?php echo $page . " - KARISMA ECOMMERCE" ?>
    </title>

    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<header>

    <div class="top-area ">
        <div class="container">
            <div class="pl-0 pl-lg-5">
                <p>Untuk pemesanan: 0341-299-5599 | Email kami:
                    <a href="mailto:info@karismaacademy.com">info@karismaacademy.com</a>
                </p>
            </div>
        </div>
    </div>
    <div id="action-bar">
        <div class="container">
            <div class="pl-0 pl-lg-4 pr-0 pr-lg-4">
                <nav class="navbar navbar-expand-lg bg-light navbar-light">

                    <a class="navbar-brand  " href="index.php">
                        <img src="img/logo.png" alt="Logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item blog">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="product.php" id="navbardrop" data-toggle="dropdown">
                                    Produk
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="product.php">Laptop</a>
                                    <a class="dropdown-item" href="product.php">Desktop PC</a>
                                    <a class="dropdown-item" href="product.php">Smartphone</a>
                                    <a class="dropdown-item" href="product.php">Tablet</a>
                                </div>
                            </li>
                            <li>
                                <form class="form-inline " action="search.php" method="get">
                                    <input class="form-control mr-sm-2 input-cari" type="text" placeholder="Pencarian">
                                    <button class="btn btn-primary d-none d-md-block" type="submit" value="Cari">Cari</button>
                                    <button class="btn btn-cari d-md-none btn-cari" type="submit"><img src="https://png.icons8.com/metro/20/000000/search.png"></button>
                                </form>
                            </li>

                            <li class="nav-item dropdown user-menu">
                                <a class="nav-link dropdown-toggle" href="product.php" id="navbardrop" data-toggle="dropdown">
                                    <img src="img/user-icon.gif">Sign In
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="sign_in.php">Sign In</a>
                                    <a class="dropdown-item" href="sign_up.php">Sign Up</a>
                                </div>
                            </li>

                            <li class="nav-item view-cart">
                                <a class="nav-link" href="cart.php">
                                    <img src="img/blue-cart.gif" alt="View Cart"> (0)
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>



</header>
