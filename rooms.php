<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJHOTEL - ContactUs</title>
    <?php include("inc/links.php") ?>
    <style>
        .h-line {
            height: 1.7px;
            width: 150px;
            margin: 0 auto;

        }

        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: 0.3s ease-in;
        }
    </style>
</head>

<body class="bg-light">
    <!--header-->
    <?php include("inc/header.php") ?>

    <div class="my-4 p-4">
        <h2 class="text-center fw-bold h-font">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch" id="filter">
                            <div class="border rounded p-3 bg-light mb-3">
                                <h5 style="font-size: 18px">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="border rounded p-3 bg-light mb-3">
                                <h5 style="font-size: 18px">CHECK AVAILABILITY</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="border rounded p-3 bg-light mb-3">
                                <h5 style="font-size: 18px" class="mb-3">FACILITIES</h5>
                                <div class="mb-2">
                                    <input id="f1" type="checkbox" class="form-control-check">
                                    <label for="f1" class="form-check-label">facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input id="f2" type="checkbox" class="form-control-check">
                                    <label for="f2" class="form-check-label">facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input id="f3" type="checkbox" class="form-control-check">
                                    <label for="f3" class="form-check-label">facility three</label>
                                </div>

                            </div>
                            <div class="border rounded p-3 bg-light mb-3">
                                <h5 style="font-size: 18px" class="mb-3">GUEST</h5>
                                <div class="d-flex">
                                    <div class="mb-2 me-2">
                                        <label class="form-label">Adult</label>
                                        <input type="text" class="form-control mb-3">

                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Children</label>
                                        <input type="text" class="form-control mb-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-md-12" style="border:1px solid black;">
                <div class="card mb-3 shadow border-0">
                    <div class="row g-0 align-items-center p-3">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/carousel/3.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-1">Simple Room Name</h5>
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                2 rooms
                            </span>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                1 Bathroom
                            </span>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                3 sofa
                            </span>
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                Wifi
                            </span>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                Television
                            </span>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                Room Heater
                            </span>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                AC
                            </span>
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                5 Adults
                            </span>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                                3 children
                            </span>
                        </div>

                        <div class="col-md-2 text-center">
                            <div class="card-body">
                                <h6 class="mb-4">₹200 per night</h6>
                                <a href="#" class="btn btn-sm custom-btn border-0 shadow-none text-white w-100 mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none w-100">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include("inc/footer.php") ?>

</body>

</html>