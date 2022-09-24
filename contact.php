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
        <h2 class="text-center fw-bold h-font">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae ab cum odit iure, expedita quibusdam fugiat at commodi corrupti vero.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4 py-2" style="border:1px solid green">
                <div class="p-4 shadow bg-white">
                    <iframe height="450" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14517.622398471913!2d81.30307674999999!3d24.5406421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39845a348b85dbbd%3A0xbc368e68a40a6da9!2sRewa%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1660893441935!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address </h5>
                    <a href="https://goo.gl/maps/iouGN5NfwBXW71YP7" target="_blank" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i>
                        Near SAF Chauk, in front of santhaliya Tinber, Rewa, Madhya Pradesh 486001
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +917757013927" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>&nbsp; +917757013927</a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: rahul.singh.22.02.1985@gmail.com" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope"></i>&nbsp; rahul.singh.22.02.1985@gmail.com</a>

                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-decoration-none text-dark">
                        <span class="badge text-dark bg-light fs-6 p-2">
                            <i class="bi bi-twitter"></i>
                        </span>
                    </a>
                    <a href="#" class="d-inline-block text-decoration-none text-dark">
                        <span class="badge text-dark bg-light fs-6 p-2">
                            <i class="bi bi-facebook"></i>&nbsp;facebook
                        </span>
                    </a>
                    <a href="#" class="d-inline-block text-decoration-none text-dark">
                        <span class="badge text-dark bg-light fs-6 p-2">
                            <i class="bi bi-linkedin"></i>&nbsp;Linkedin
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4 py-2" style="border:1px solid green">
                <div class="p-4 shadow bg-white">
                    <form>
                        <h5>Send A Message</h5>
                        <div class="mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Subject</label>
                            <input type="subject" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" style="resize:none"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-btn mt-3">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?php include("inc/footer.php") ?>

</body>

</html>