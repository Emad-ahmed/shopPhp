<?php

include 'config.php';

$id = $_GET['id'];

$datafetchquery = mysqli_query($conn, "SELECT * FROM `product` WHERE id = '$id'");

$data = mysqli_fetch_array($datafetchquery);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            text-align: center;
        }

        td img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="home.php">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="addproduct.php">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="showproduct.php">Show Product</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mt-4 mb-5 ">Edit Product</h1>
        <form action="editproduct_action.php" method="POST" class="w-50 m-auto" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="ptitle" class="form-label">Product Title</label>
                <input type="text" id="ptitle" value="<?php echo $data['title'] ?>" name="ptitle" class="form-control">

            </div>
            <div class="mb-3">
                <label for="ptitle" class="form-label">Description</label>
                <div class="form-floating">
                    <textarea class="form-control" value="<?php echo $data['description'] ?>" name="desc" placeholder="Description" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Description</label>
                </div>

            </div>
            <div class="mb-3">
                <label for="pprice" class="form-label">Price</label>
                <input type="text" id="pprice" value="<?php echo $data['price'] ?>" name="pprice" class="form-control">
            </div>

            <div class="mb-3">
                <label for="pimg" class="form-label">Product Image</label>
                <input type="file" id="pimg" name="pimg" class="form-control" value="<?php echo $data['image'] ?>">
                <img src="" alt="">
            </div>

            <div class="mb-3">
                <img src="<?php echo $data['image'] ?>" alt="Image" style="width:100px;">
            </div>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>