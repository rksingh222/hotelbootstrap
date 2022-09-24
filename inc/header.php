<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand h-font me-5 fw-bold fs-3" href="#">T J Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
                        data-bs-target="#loginmodal">
                        login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
                        data-bs-target="#registermodal">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!--Login modal -->
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i
                                class="bi bi-person-circle fs-3 me-2"></i>Login</h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-2 d-flex align-items-center justify-content-between">
                            <button class="btn btn-dark">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">forgot
                                password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--register modal-->
    <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i
                                class="bi bi-person-circle fs-3 me-2"></i>Register</h5>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill lh-base text-wrap bg-light text-dark">
                            Note: your details must match with your ID (Aadhaar Card, passport, driving license etc)
                            that will
                            be required during check in
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3 pe-0 ">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3 pe-0">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="col-md-12 mb-3 p-0">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3 pe-0">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3 p-0">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3 pe-0">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>