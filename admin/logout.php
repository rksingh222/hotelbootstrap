<?php
include("../path.php");
include("inc/db_config.php");

session_destroy();
header("location: ".BASE_PATH. "/admin/index.php");
