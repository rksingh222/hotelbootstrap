<?php
include("../../path.php");
include(APP_PATH."/admin/inc/db_config.php");
include(APP_PATH."/admin/inc/essentials.php");

$sql = "SELECT * FROM settings WHERE id=?";

if(isset($_POST['get_general'])){
    $data = [1];
    $result = selectone($sql,$data,"i");
    $json_data = json_encode($result);
    echo $json_data;
}

if(isset($_POST['upd_general'])){
    $form_data = filteration($_POST);
    $sql = "UPDATE settings SET site_title=?,site_about=? WHERE id=?";
    $values = [$form_data['site_title'],$form_data['site_about'],1];
    $res = update($sql,$values,"ssi");
    echo $res;
}
if(isset($_POST['upd_shutdown'])){
    $form_data = ($_POST['upd_shutdown']==0) ? 1 : 0;
    $sql = "UPDATE settings SET shutdown=? WHERE id=?";
    $values = [$form_data,1];
    $res = update($sql,$values,"ii");
    echo $res;
}

if(isset($_POST['get_contact'])){
    $sql = "SELECT * FROM contact_details WHERE id=?";
    $data = [1];
    $result = selectone($sql,$data,"i");
    $json_data = json_encode($result);
    echo $json_data;
}

if(isset($_POST['upd_contacts'])){
    $form_data = filteration($_POST);
    $sql = "UPDATE contact_details SET address=?,gmap=?,pn1=?,pn2=?,email=?,fb=?,tw=?,insta=?,iframe=? WHERE id=?";
    $values = [$form_data['address'],$form_data['gmap'],$form_data['pn1'],$form_data['pn2'],$form_data['email'],$form_data['fb'],$form_data['tw'],$form_data['insta'],$form_data['iframe'],1];
    $res = update($sql,$values,"sssssssssi");
    echo $res;
}

if(isset($_POST['add_member'])){
    //$form_data = filteration($_POST);
    print_r($_FILES['picture']);
    //uploadImage($_FILES['picture'],ABOUT);
}