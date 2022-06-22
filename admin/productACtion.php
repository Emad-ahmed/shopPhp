<?php
include 'config.php';

$title = $_POST['ptitle'];
$description = $_POST['desc'];
$price = $_POST['pprice'];
$image = $_FILES['pimg'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'imageproduct/' . $imageName;


move_uploaded_file($imageLocation, $imageDes);



$insert_product = mysqli_query($conn, "INSERT INTO `product`(`title`, `description`, `price`, `image`) VALUES ('$title','$description','$price','$imageDes')");


if ($insert_product) {
    echo "<script>alert('Product Successfully Inserted')</script>";
    echo "<script>location.href = 'showproduct.php'</script>";
} else {
    echo "<script>alert('Not Inserted!')</script>";
    echo "<script>location.href = 'addproduct.php'</script>";
}
