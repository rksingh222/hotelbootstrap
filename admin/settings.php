<?php
include("../path.php");
include("inc/db_config.php");
include("inc/essentials.php");
session_regenerate_id(true);
adminLogin();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Setting Page</title>
    <?php include("inc/links.php") ?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }

        #dashboard-menu {
            position: fixed;
            height: 100%;
        }

        .break-word {
            word-break: break-all;
        }

        .custom-box {
            position: fixed;
            top: 80px;
            right: 20px;
        }

        @media screen and (max-width: 992px) {
            #dashboard-menu {
                width: 100%;
                height: auto;
            }

            #main-content {
                margin-top: 60px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <?php require("inc/header.php") ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden break-word">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- general setting -->
                <div class="card mb-4 shadow border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Setting</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#modal1">
                                <i class="bi bi-pencil-square"></i>Edit
                            </button>
                        </div>

                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title">Content</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about">Content</p>
                    </div>
                </div>

                <!-- General Setting edit button Modal -->
                <div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="get_general_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">General Settings</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_tit" id="site_title_inp" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" name="site_abt" id="site_about_inp" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_tit.value=result.site_title; site_abt.value=result.site_about;" class="btn text-secondary sh" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-btn text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <input id="shutdown-toggle" onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </div>
                        <p class="card-text">
                            No customers will be allowed to book hotel, when shutdown mode is turned on
                        </p>
                    </div>
                </div>

                <!-- Contact Details -->
                <div class="card mb-4 shadow border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contact-us">
                                <i class="bi bi-pencil-square"></i>Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="border: 1px solid black">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="tele1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="tele2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                    <p class="card-text">
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-twitter me-1"></i>
                                        <span id="twit"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="insta"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle p-2 mb-1 fw-bold">iFrame</h6>
                                    <iframe id="iframe" class="border w-100"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contact edit button modal -->
                <div class="modal fade" id="contact-us" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contact_edit_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Contact Settings</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Gmap</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Number (with country code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" class="form-control" name="pn1" id="tele1_inp" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" class="form-control" name="pn2" id="tele2_inp">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" id="email_inp" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                        <input type="text" class="form-control" name="fb" id="fb_inp" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                        <input type="text" class="form-control" name="insta" id="insta_inp">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                                        <input type="text" class="form-control" name="twit" id="twit_inp">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">iFrame Src</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="ifrm" id="iframe_inp">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="console.log('contact'+contact_info_values);fill_contact_info_in_modal(contact_info_values);" class="btn text-secondary sh" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-btn text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!-- management details -->
                <div class="card mb-4 shadow border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Management Team</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-edit">
                                <i class="bi bi-pencil-square"></i>Edit
                            </button>
                        </div>
                    </div>
                </div>

                <!-- management modal -->
                <div class="modal fade" id="team-edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="team_edit_form" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Team Member</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Member Name</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Member Picture</label>
                                        <input type="file" name="member_picture" accept=".jpeg, .png, .jpg, .webp" id="member_picture_inp" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"  class="btn text-secondary sh" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn custom-btn text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include("inc/scripts.php") ?>
    <!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
    <script>
        let result;
        let contact_info_values;

        var site_title = document.getElementById("site_title");
        var site_about = document.getElementById("site_about");
        var shutdown_toggle = document.getElementById("shutdown-toggle");
        var site_title_inp = document.getElementById("site_title_inp");
        var site_about_inp = document.getElementById("site_about_inp");


        var general_form = document.getElementById("get_general_form");
        general_form.addEventListener("submit", function(e) {
            console.log("inside general_form");
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        });

       
        function get_general() {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                result = JSON.parse(this.responseText);
                site_title.innerText = result.site_title;
                site_about.innerText = result.site_about;
                site_title_inp.value = result.site_title;
                site_about_inp.value = result.site_about;
                if (result.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            };
            xhr.send('get_general');
        }

        function upd_general(update_site_title_text, update_site_about_text) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.responseText == 1) {
                    var myModalEl = document.getElementById('modal1');
                    var modal = bootstrap.Modal.getInstance(myModalEl);
                    modal.hide();
                    get_general();
                    alertmsg("success", "record updated");
                } else {
                    var myModalEl = document.getElementById('modal1');
                    var modal = bootstrap.Modal.getInstance(myModalEl);
                    modal.hide();

                    alertmsg("error", "no record updated");
                }
            };
            xhr.send('site_title=' + update_site_title_text + '&site_about=' + update_site_about_text + '&upd_general');
        }

        function upd_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.responseText == 1 && result.shutdown == 0) {
                    get_general();
                    alertmsg("success", "shutdown mode on");
                } else {
                    alertmsg("error", "shutdown mode of");
                }
            };
            console.log("toggle shutdown =" + val);
            xhr.send('upd_shutdown=' + val);
        }

        function get_contact() {
            let contact_id = ["address", "gmap", "tele1", "tele2", "email", "fb", "twit", "insta"];
            let iframe = document.getElementById("iframe");
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                contact_info_values = Object.values(JSON.parse(this.responseText));
                console.log(contact_info_values);
                for (var i = 0; i < contact_id.length; i++) {
                    document.getElementById(contact_id[i]).innerText = contact_info_values[i + 1];
                }
                iframe.src = contact_info_values[9];
                fill_contact_info_in_modal(contact_info_values);

            };
            xhr.send('get_contact');
        }

        var contact_edit_form = document.getElementById("contact_edit_form");
        contact_edit_form.addEventListener("submit", function(e) {
            e.preventDefault();
            upd_contact();
        });

        function upd_contact() {
            let index = ["address", "gmap", "pn1", "pn2", "email", "fb", "tw", "insta", "iframe"];
            let contact_inp_id = ["address_inp", "gmap_inp", "tele1_inp", "tele2_inp", "email_inp", "fb_inp", "twit_inp", "insta_inp", "iframe_inp"];
            let data_str = "";
            for(i=0;i<index.length;i++){
                data_str += index[i] + "=" + document.getElementById(contact_inp_id[i]).value + "&";
                console.log(document.getElementById(contact_inp_id[i]).value);
            }
            data_str += "upd_contacts";
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if(this.responseText == 1){
                    var myModalEl = document.getElementById('contact-us');
                    var modal = bootstrap.Modal.getInstance(myModalEl);
                    modal.hide();
                    get_contact();
                    alertmsg("success", "contact details updated");
                }else{
                    var myModalEl = document.getElementById('contact-us');
                    var modal = bootstrap.Modal.getInstance(myModalEl);
                    modal.hide();
                    alertmsg("error", "unable to update contact details");
                }
            };
            xhr.send(data_str);
        }

        function fill_contact_info_in_modal(contact_info_values) {
            let contact_id = ["address_inp", "gmap_inp", "tele1_inp", "tele2_inp", "email_inp", "fb_inp", "twit_inp", "insta_inp", "iframe_inp"];
            for (var i = 0; i < contact_id.length; i++) {
                document.getElementById(contact_id[i]).value = contact_info_values[i + 1];
            }
        }

        var team_edit_form = document.getElementById("team_edit_form");
        team_edit_form.addEventListener("submit",function(event){
        
            event.preventDefault();
           var membername = document.getElementById("member_name_inp");
           var memberpicture = document.getElementById("member_picture_inp");
           var data = new FormData();
           console.log(membername.value);
           console.log(memberpicture.files[0]);
           data.append("name",membername.value);
           data.append("picture",memberpicture.files[0]);
           data.append("add_member","");

           console.log("appended data");
           let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            //xhr.setRequestHeader('Content-Type', 'multipart/form-data');
            xhr.onload = function() {
                console.log(this.responseText);
            };
            xhr.send(data);
        });
        


        window.onload = function() {
            get_general();
            get_contact();
        }
        /* $(document).ready(function(){
             $.ajax({
                 url: "ajax/settings_crud.php",
                 type: "POST",
                 data: {get_general: "2"},
                 success : function(data){
                     console.log(data);
                 }
             });
         }); */
    </script>
</body>

</html>