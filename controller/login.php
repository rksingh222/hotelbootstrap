<?php
if (isset($_POST['login'])) {
    $frm_data = filteration($_POST);

    $query = "SELECT * FROM admin_cred WHERE admin_name=? AND admin_pass=?";
    $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

    $result = selectone($query, $values, "ss");
    if (empty($result)) {
        alert('error', 'Login Failed - Invalid Credentials');
    } else {
        $_SESSION['id'] = $result['id'];
        header('location: '. BASE_PATH . "/admin/dashboard.php");
    }
}
