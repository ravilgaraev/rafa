<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
    <!-- Google Fonts Roboto -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>MDB</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12 mb-4 white-text text-center">
                        <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown"
                            data-wow-delay="0.3s"><strong>Minimalist intro</strong></h1>
                        <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                        <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Photography
                                & design</strong></h5>
                        <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">portfolio</a>
                        <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">About me</a>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Content -->
        </div>
        <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
</header>


<div class="container my-5">

    <!-- Section -->
    <section>

        <style>
            .md-pills .nav-link.active {
                color: #fff;
                background-color: #616161;
            }
            button.close {
                position: absolute;
                right: 0;
                z-index: 2;
                padding-right: 1rem;
                padding-top: .6rem;
            }
        </style>

        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6 py-5 pl-5">

                                <h5 class="font-weight-normal mb-3">Paper cup mockup</h5>

                                <p class="text-muted">Key letters, explain which writing we he carpeting or fame, the itch expand medical amped through constructing time. And scarfs, gain, get showed accounts decades.</p>

                                <ul class="list-unstyled font-small mt-5">
                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Client</strong></p>
                                        <p class="text-muted mb-4">Envato Inc.</p>
                                    </li>

                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Date</strong></p>
                                        <p class="text-muted mb-4">June 27, 2019</p>
                                    </li>

                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Skills</strong></p>
                                        <p class="text-muted mb-4">Design, HTML, CSS, Javascript</p>
                                    </li>

                                    <li>
                                        <p class="text-uppercase mb-2"><strong>Address</strong></p>
                                        <a href="https://mdbootstrap.com/docs/jquery/design-blocks/">MDBootstrap</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">

                                <div class="view rounded-right">
                                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Sample image">
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>
                </div>
            </div>
        </div>

        <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">portfolio</h6>
        <h3 class="font-weight-bold text-center dark-grey-text pb-2">Product Designs</h3>
        <hr class="w-header my-4">
        <p class="lead text-center text-muted pt-2 mb-5">You can find several product design by our professional team in
            this section.</p>

        <!--First row-->
        <div class="row">

            <!--First column-->
            <div class="col-12">

                <!-- Nav tabs -->
                <ul class="nav md-pills flex-center flex-wrap mx-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold text-uppercase" data-toggle="tab" href="#panel31" role="tab">ALL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel32" role="tab">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-uppercase" data-toggle="tab" href="#panel33" role="tab">Mockup</a>
                    </li>
                </ul>

            </div>
            <!--First column-->

        </div>
        <!--First row-->

        <!--Tab panels-->
        <div class="tab-content mb-5">

            <!--Panel 1-->
            <div class="tab-pane fade show in active" id="panel31" role="tabpanel">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img3.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Phone Bag</h5>
                                <p class="card-text text-uppercase mb-3">Bag, Box</p>

                            </div>

                        </a>
                        <!-- Card -->

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img9.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Paper Bag</h5>
                                <p class="card-text text-uppercase mb-3">Bag</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img4.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Book</h5>
                                <p class="card-text text-uppercase mb-3">Book</p>

                            </div>

                        </a>
                        <!-- Card -->

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img5.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Notes</h5>
                                <p class="card-text text-uppercase mb-3">Note</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img10.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">T-shirt</h5>
                                <p class="card-text text-uppercase mb-3">Box</p>

                            </div>

                        </a>
                        <!-- Card -->

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img8.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Magazine</h5>
                                <p class="card-text text-uppercase mb-3">Book</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!--Panel 1-->

            <!--Panel 2-->
            <div class="tab-pane fade" id="panel32" role="tabpanel">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img9.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Paper Bag</h5>
                                <p class="card-text text-uppercase mb-3">Bag</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img4.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Book</h5>
                                <p class="card-text text-uppercase mb-3">Book</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img8.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Magazine</h5>
                                <p class="card-text text-uppercase mb-3">Book</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!--Panel 2-->

            <!--Panel 3-->
            <div class="tab-pane fade" id="panel33" role="tabpanel">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 col-lg-4">

                        <!-- Card -->
                        <div class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img3.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Phone Bag</h5>
                                <p class="card-text text-uppercase mb-3">Bag, Box</p>

                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img5.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">Notes</h5>
                                <p class="card-text text-uppercase mb-3">Note</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-4">

                        <!-- Card -->
                        <a class="card hoverable mb-4" data-toggle="modal" data-target="#basicExampleModal">

                            <!-- Card image -->
                            <img class="card-img-top" src=" https://mdbootstrap.com/img/Photos/Others/img10.jpg" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">

                                <h5 class="my-3">T-shirt</h5>
                                <p class="card-text text-uppercase mb-3">Box</p>

                            </div>

                        </a>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!--Panel 3-->

        </div>
        <!--Tab panels-->

    </section>
    <!-- Section -->

</div>




<div class="container my-5">

    <style>
        .border-top {
            border-top: 5px solid #33b5e5 !important;
            border-top-left-radius: .25rem!important;
            border-top-right-radius: .25rem!important;
        }
    </style>

    <!--Section: Content-->
    <section class="text-center dark-grey-text mb-5">

        <div class="card">
            <div class="card-body rounded-top border-top p-5">

                <!-- Section heading -->
                <h3 class="font-weight-bold my-4">Contact Us</h3>
                <!-- Section description -->
                <p class="font-weight-light mx-auto mb-4 pb-2">Lorem ipsum dolor, sit amet consectetur<br> adipisicing elit. Id quam sapiente molestiae.</p>

                <form class="mb-4 mx-md-5" action="">

                    <div class="row">
                        <div class="col-md-6 mb-4">

                            <!-- Name -->
                            <input type="text" id="name" class="form-control" placeholder="Name">

                        </div>
                        <div class="col-md-6 mb-4">

                            <!-- Email -->
                            <input type="email" id="email" class="form-control" placeholder="Email">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">

                            <!-- Subject -->
                            <input type="text" id="subject" class="form-control" placeholder="Subject">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group mb-4">
                                <textarea class="form-control rounded" id="message" rows="3" placeholder="How can we help?"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-md">Submit</button>
                            </div>

                        </div>
                    </div>

                </form>

            </div>
        </div>

    </section>
    <!--Section: Content-->

</div>



<div class="container my-5">


    <!-- Section: Block Content -->
    <section class="mb-4">

        <style>
            .map-container {
                overflow: hidden;
                position: relative;
                height: 0;
            }

            .map-container iframe {
                left: 0;
                top: 0;
                height: 100%;
                width: 100%;
                position: absolute;
            }
        </style>

        <div class="card">

            <div class="row my-md-5 py-md-4 p-3">
                <div class="col-md-10 mx-auto">

                    <!-- Google Maps -->
                    <div id="map-within-card" class="map-container" style="height: 400px">
                        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                style="border:0" allowfullscreen></iframe>
                    </div>
                    <!-- Google Maps -->

                </div>
            </div>

        </div>

    </section>
    <!-- Section: Block Content -->


</div>
<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold">Footer text 1</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
                    repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
                    harum esse fugiat. Itaque, culpa?</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-6 mb-md-0 mb-3">

                <!-- Content -->
                <h5 class="text-uppercase font-weight-bold">Footer text 2</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
                    commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
                    excepturi hic.</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script>

</body>
</html>
