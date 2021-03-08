<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <div class="container mt-5">
      <form action="handle-add-product.php" method="post" class="form-group">
        <input type="text" placeholder="Product Name" name="productName" class="form-control">

        <?php if (! empty( $_SESSION["errors"]["productName"])){ ?>
              <div class="alert alert-danger mt-4">
              <?php
                    if (isset($_SESSION["errors"]["productName"])){
                      echo $_SESSION["errors"]["productName"];
                    }
                    unset($_SESSION["errors"]["productName"]);
              ?>
          </div>
           <?php } ?>
    
        <textarea name="productDescription" class="form-control my-4" cols="30" rows="5" placeholder="Product Description"></textarea>

        <?php if (! empty( $_SESSION["errors"]["productDescription"])){ ?>
              <div class="alert alert-danger mt-4">
              <?php
                    if (isset($_SESSION["errors"]["productDescription"])){
                      echo $_SESSION["errors"]["productDescription"];
                    }
                    unset($_SESSION["errors"]["productDescription"]);
              ?>
          </div>
           <?php } ?>

        <input type="number" name="productPrice" class="form-control" placeholder="Product Price">

        <?php if (! empty( $_SESSION["errors"]["productPrice"])){ ?>
              <div class="alert alert-danger mt-4">
              <?php
                    if (isset($_SESSION["errors"]["productPrice"])){
                      echo $_SESSION["errors"]["productPrice"];
                    }
                    unset($_SESSION["errors"]["productPrice"]);
              ?>
          </div>
           <?php } ?>

        <div class="text-center">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-lg my-4">
        </div>
      </form>
  </div>





    <script src="JS/jquery-3.5.1.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>

</html>