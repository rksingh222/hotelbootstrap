<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJHOTEL - HOME</title>
    <?php include("inc/links.php") ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" >
    
    
    <style>
        


        .availability-form {
            margin-top: -50px;
            z-index: 11;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 25px;
                z-index: 11;
                position: relative;
            }
        }

        /*font-family: 'Merienda', cursive;
font-family: 'Poppins', sans-serif;*/
    </style>
</head>

<body class="bg-light">
    <!--header-->
    <?php include("inc/header.php") ?>
  

    <!--carousel-->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.jpg" class="d-block w-100" />
                </div>
                <div class="swiper-slide h-50">
                    <img src="images/carousel/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide h-50">
                    <img src="images/carousel/3.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.jpg" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>
    <!-- availability form-->
    <div class="container availability-form bg-white" style="border :1px solid green">
        <div class="row">
            <div class="col-lg-12 shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availabiltiy</h5>
                <form>
                    <div class="row  align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Check In</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Check Out</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label">Adult</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label">Children</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3">
                            <button class="btn shadow-none text-white custom-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--cards-->
    <h2 class="mt-4 mb-4 pt-4 h-font text-center fw-bold">our room</h2>
    <div class="container" style="border: 1px solid green;">
        <div class="row">
            <div class="col-md-6 col-lg-4 my-3" style="border: 1px solid #686868;">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="room/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
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
                        </div>
                        <div class="facilities mb-4">
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
                        </div>
                        <div class="rating  mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark text-warning">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-btn border-0 shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 my-3" style="border: 1px solid #686868;">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="room/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
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
                        </div>
                        <div class="facilities mb-4">
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
                        </div>
                        <div class="rating  mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark text-warning">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-btn border-0 shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 my-3" style="border: 1px solid #686868;">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="room/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Simple Room Name</h5>
                        <h6 class="mb-4">₹200 per night</h6>
                        <div class="features mb-4">
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
                        </div>
                        <div class="facilities mb-4">
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
                        </div>
                        <div class="rating  mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill lh-base text-wrap bg-light text-dark text-warning">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm custom-btn border-0 shadow-none text-white">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5 ">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More rooms >>></a>
            </div>
        </div>
    </div>

    <!--facilities-->
    <h2 class="mt-4 mb-4 pt-4 h-font text-center fw-bold">our facilities</h2>
    <div class="container" style="border: 1px solid green">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-md-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3"
                style="border: 1px solid green">
                <div><i class="bi bi-wifi" style="font-size:60px"></i></div>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-md-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3"
                style="border: 1px solid green">
                <div><i class="bi bi-wifi" style="font-size:60px"></i></i></div>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-md-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3"
                style="border: 1px solid green">
                <div><i class="bi bi-wifi" style="font-size:60px"></i></i></div>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-md-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3"
                style="border: 1px solid green">
                <div><i class="bi bi-wifi" style="font-size:60px"></i></i></div>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-md-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3"
                style="border: 1px solid green">
                <div><i class="bi bi-wifi" style="font-size:60px"></i></i></div>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-md-2 col-lg-2 text-center bg-white rounded shadow py-4 my-3"
                style="border: 1px solid green">
                <div><i class="bi bi-wifi" style="font-size:60px"></i></i></div>
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!--testimonials-->
    <h2 class="mt-4 mb-4 pt-4 h-font text-center fw-bold">our testimonials</h2>
    <div class="container" style="border: 1px solid green">
        <!-- Swiper -->
        <div class="swiper swiper-testimonial">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-star-fill"></i>
                        <h5 class="m-0 ms-2">random user</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat eaque tenetur earum dicta quod
                        illo suscipit illum repellendus magni tempore nisi, explicabo minus temporibus quisquam
                        architecto provident eveniet veniam alias.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-star-fill"></i>
                        <h5 class="m-0 ms-2">random user</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat eaque tenetur earum dicta quod
                        illo suscipit illum repellendus magni tempore nisi, explicabo minus temporibus quisquam
                        architecto provident eveniet veniam alias.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide p-4 bg-white">
                    <div class="profile d-flex align-items-center mb-3">
                        <i class="bi bi-star-fill"></i>
                        <h5 class="m-0 ms-2">random user</h5>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat eaque tenetur earum dicta quod
                        illo suscipit illum repellendus magni tempore nisi, explicabo minus temporibus quisquam
                        architecto provident eveniet veniam alias.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!-- Reach Us-->
    <h2 class="mt-4 mb-4 pt-4 h-font text-center fw-bold">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe height="450" class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14517.622398471913!2d81.30307674999999!3d24.5406421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39845a348b85dbbd%3A0xbc368e68a40a6da9!2sRewa%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1660893441935!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="bg-white p-4">
                    <h5>Call us</h5>
                    <a href="tel: +917757013927" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-fill"></i>&nbsp; +917757013927</a>
                </div>
                <div class="bg-white p-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge text-dark bg-light fs-6 p-2">
                            <i class="bi bi-twitter"></i>&nbsp;Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge text-dark bg-light fs-6 p-2">
                            <i class="bi bi-facebook"></i>&nbsp;facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <span class="badge text-dark bg-light fs-6 p-2">
                            <i class="bi bi-linkedin"></i>&nbsp;Linkedin
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include("inc/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableoninteration: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonial", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>