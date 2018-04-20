<?php
// Create database connection
require('dbh.inc.php');

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // FILE EXTENTION
    $ext = pathinfo($image, PATHINFO_EXTENSION);
    // Get text
    $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);

    // image file directory
    $target = "../images/".basename($image);

    if( $ext == 'gif' || $ext == 'png' || $ext == 'jpg' ) {
        $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    } else {
//        $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
        header("Location: ../upload.php?message=file-ext'");
    }

//    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header("Location: ../upload.php?message=upload-suc");
    }else{
        $msg = "Failed to upload image";
        header("Location: ../upload.php?message=upload-fail'");
    }

}
$result = mysqli_query($conn, "SELECT * FROM images");
?>