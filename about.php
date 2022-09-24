<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJHOTEL - About</title>
    <?php include("inc/links.php") ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">
    <!--header-->
    <?php include("inc/header.php") ?>

    <div class="my-4 p-4">
        <h2 class="text-center fw-bold h-font">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ab cum odit iure, expedita quibusdam fugiat at commodi corrupti vero.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2" style="border:1px solid green;">
                <h3 class="mb-3">lorem ipsum dolor set </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ut explicabo aliquid tenetur neque atque eaque velit impedit sapiente minus magnam vitae voluptatum architecto facere amet iusto molestiae ex nobis?
                </p>
            </div>
            <div class="col-md-5 col-lg-5 mb-4 order-lg-2 order-md-2 order-1" style="border:1px solid green;">
                <img src="images/carousel/3.jpg" alt="not working" class="w-100">
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4 py-4" style="border:1px solid #006669">
                <div class="rounded bg-white shadow p-4 border-top border-4 box text-center">
                    <img src="images/hotel2.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 py-4" style="border:1px solid #006669">
                <div class="rounded bg-white shadow p-4 border-top border-4 box text-center">
                    <img src="images/rating.svg" width="70px">
                    <h4 class="mt-3">100+ Ratings</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 py-4" style="border:1px solid #006669">
                <div class="rounded bg-white shadow p-4 border-top border-4 box text-center">
                    <img src="images/customers.svg" width="70px">
                    <h4 class="mt-3">100+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4 py-4" style="border:1px solid #006669">
                <div class="rounded bg-white shadow p-4 border-top border-4 box text-center">
                    <img src="images/staff.svg" width="70px">
                    <h4 class="mt-3">100+ Staff</h4>
                </div>
            </div>
        </div>
    </div>
    <h3 class="text-center my-5 fw-bold">Management Team</h3>

    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide mb-5 overflow-hidden rounded ">
                    <img src="images/carousel/3.jpg" alt="" class="w-100">
                    <h1 class="mt-2 mb-2 text-center">Random Team</h1>
                </div>
                <div class="swiper-slide mb-5 overflow-hidden rounded ">
                    <img src="images/carousel/3.jpg" alt="" class="w-100">
                    <h1 class="mt-2 mb-2 text-center">Random Team</h1>
                </div>
                <div class="swiper-slide mb-5 overflow-hidden rounded ">
                    <img src="images/carousel/3.jpg" alt="" class="w-100">
                    <h1 class="mt-2 mb-2 text-center">Random Team</h1>
                </div>
                <div class="swiper-slide mb-5 overflow-hidden rounded ">
                    <img src="images/carousel/3.jpg" alt="" class="w-100">
                    <h1 class="mt-2 mb-2 text-center">Random Team</h1>
                </div>
                <div class="swiper-slide mb-5 overflow-hidden rounded ">
                    <img src="images/carousel/3.jpg" alt="" class="w-100">
                    <h1 class="mt-2 mb-2 text-center">Random Team</h1>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- footer -->
    <?php include("inc/footer.php") ?>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>