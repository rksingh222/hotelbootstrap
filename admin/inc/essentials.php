<?php
function redirect($path){
    $url = BASE_PATH . $path;
    header('location: '. $url);
}
function adminLogin(){
    if(!(isset($_SESSION['id']))){
        header('location: '. BASE_PATH . "/admin/index.php");
    }
}

function  alreadyLoggedIn(){
    if((isset($_SESSION['id']))){
        header('location: '. BASE_PATH . "/admin/dashboard.php");
    }
}
function alert($type,$msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    print <<< alert
        <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
            <strong>$msg</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    alert; 
}
function uploadImage($file,$folder){
    $valid_mime = ["image/jpeg","image/png","image/webp"];
    $img_mime = $file['type'];
    if(!in_array($img_mime,$valid_mime)){
        return "invalid image. Please try with png or jpeg or webp extenstion";
    }
    else if($file['size']/(1024*1024) > 2){
        return "size of the image is more than 2MB";
    }
    else{
        $ext = pathinfo($file['name'],PATHINFO_EXTENSION);
        $destination = APP_PATH.$folder."IMG_".time().".".$ext;
       if(move_uploaded_file($file['tmp_name'],$destination)){
           return $destination;
       }
       else{
           return "failed to upload";
       }
    }
}
//this function for calling the script using window.location.href
/*function redirect($path){
    $url = BASE_PATH . $path;
    echo "<script>window.location.href='$url'</script>";
}*/
