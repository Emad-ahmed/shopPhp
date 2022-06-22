<?php
include 'config.php';

$id = $_POST['id'];

$title = $_POST['ptitle'];
$description = $_POST['desc'];
$price = $_POST['pprice'];
$image = $_FILES['pimg'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'imageproduct/' . $imageName;


move_uploaded_file($imageLocation, $imageDes);



$update_product = mysqli_query($conn, "UPDATE `product` SET `title`='$title',`description`='$description',`price`='$price',`image`='$imageDes' WHERE id = '$id'");


if ($update_product) {
    echo "<script>alert('Product Successfully Updated')</script>";
    echo "<script>location.href = 'showproduct.php'</script>";
} else {
    echo "<script>alert('Failed Update!')</script>";
    echo "<script>location.href = 'editproduct.php'</script>";
}
