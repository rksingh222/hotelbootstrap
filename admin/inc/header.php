<div class="container-fluid bg-dark d-flex align-items-center justify-content-between sticky-top">
    <h4 class="text-white p-3">Admin Panel</h4>
    <a href="logout.php"><button class="btn btn-light">logout</button></a>
</div>
<div class="col-lg-2 bg-dark text-white border-3 border-top" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-light text-white">
        <div class="container-fluid d-flex flex-lg-column align-items-center justify-content-between">
            <a class="navbar-brand text-white" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch" id="navbarSupportedContent">
                <ul class="nav nav-pills me-auto mb-2 mb-lg-0 flex-column text-white">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo BASE_PATH . "/admin/settings.php"?>">Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>