<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ChicFeet</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                <h4 class="text-white fw-bold">ChicFeet</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link text-white fw-bold" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-bold" href="#fitur">Features</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-bold" href="#portfolio">Product</a></li>
                    <li class="nav-item"><a class="nav-link text-white fw-bold" href="#about">About</a></li>
                </ul>

                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a href="/login" class="btn btn-success shadow-sm m-2">Login</a>
                    <a href="/register" class="btn btn-info shadow-sm m-2">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead" id="home">
        <div class="container">
            <div class="masthead-subheading text-info fw-bolder">ChicFeet</div>
            <div class="masthead-heading text-info text-uppercase">Disc up to 40%, for new member !</div>
            <div class="row">
                <a class="btn col-12 text-white btn-xl text-uppercase" href="#deskripsi">View More</a>
                <a class="btn col-12 text-white btn-xl text-uppercase" href="#deskripsi"><i
                        class="fas fa-solid fa-arrow-down"></i></a>
            </div>
        </div>
    </header>

    <section class="page-section" id="fitur">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Features</h2>
                <h3 class="section-subheading text-muted">Kami memiliki fitur-fitur menarik untuk memenuhi kebutuhan
                    belanja anda.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">

                        <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>

                    </span>
                    <h4 class="my-3">Product</h4>
                    <p class="text-muted">Product berkualitas dan harga terjangkau.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                        <i class="fas fa-solid fa-tags fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Voucher Discount</h4>
                    <p class="text-muted">Voucher Discount menarik, semua product.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                        <i class="fas fa-solid fa-truck fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Pegiriman Instant</h4>
                    <p class="text-muted">Fitur pengiriman cepat 1x24 jam.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center my-5">
                <h2 class="section-heading text-uppercase">Product Unggulan</h2>
            </div>
            <div class="row">
                @foreach ($products as $index => $product)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" data-bs-target="#portfolioModal"
                                data-product="{{ json_encode($product) }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img class="img-fluid w-50" src="assets/img/produk1.png" alt="..." />
                                    <!-- <img class="img-fluid w-50" src="assets/img/produk1.png" alt="..." /> -->
                                </div>

                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $product->nama }}</div>
                                <div class="portfolio-caption-subheading text-muted">IDR. {{ $product->harga_jual }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h3 class="display-5 fw-bolder py-2">ChicFeet</h3>
                <p id="about" class="lead py-2 fw-normal text-dark-50 mb-0">ChicFeet adalah toko sepatu yang menghadirkan pilihan sepatu yang modis dan 
                    trendi untuk para fashionista dan pecinta sepatu. Kami menawarkan berbagai macam koleksi sepatu terbaru 
                    yang dirancang dengan gaya yang elegan dan memperhatikan kualitas.</p>
            </div>
        </div>
    </section>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Patners :</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg"
                            alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start fw-bold fs-6">ChicFeet</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-light text-decoration-none" href="#!">Jagakarsa, Jakarta Selatan</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="portfolio-modal vh-100 modal fade" id="portfolioModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center align-items-center h-100 mx-auto w-50">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h5 class="text-uppercase product-name"></h5>
                                <p class="item-intro text-muted product-price"></p>
                                <img class="img-fluid w-75 d-block mx-auto" src="assets/img/produk1.png"
                                    alt="modal" />
                                <button class="btn btn-success btn-md text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-solid fa-cart-plus me-1"></i>
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
        var portfolioModal = document.getElementById('portfolioModal');
        var modalProductName = portfolioModal.querySelector('.product-name');
        var modalProductPrice = portfolioModal.querySelector('.product-price');

        portfolioModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Tombol yang diklik
            var productData = JSON.parse(button.getAttribute(
                'data-product')); // Mendapatkan data produk dari atribut data

            // Mengisi detail produk dalam modal
            modalProductName.textContent = productData.nama;
            modalProductPrice.textContent = 'IDR. ' + productData.harga_jual;
        });
    </script>

</body>

</html>
