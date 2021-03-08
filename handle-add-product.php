<?php include_once("functions.php") ?>

<?php

session_start();

if (isset($_POST['submit'])) {
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];
    $discountPrice = getPriceWithDiscount($productPrice);
    
    $errors = [];

    //productName validation
    if (empty($productName)) {
        $errors["productName"] = "Product name is required";
    } elseif (is_numeric($productName)) {
        $errors["productName"] = "Product name must be a string";
    } elseif (strlen($productName) < 5 or strlen($productName) > 255){
        $errors["productName"] = "Product name min characters is 5 or max is 255";
    } else {
        echo "Product Name : $productName <br>";
    }

    //productDescription validation
    if (empty($productDescription)) {
        echo "Product Description : Not added description <br>";
    } elseif (is_numeric($productDescription)) {
        $errors["productDescription"] = "Product description must be a string";
    } else {
        echo "Product Description : $productDescription <br>";
    }

    //productPrice validation
    if (empty($productPrice)) {
        $errors["productPrice"] = "Product price is required";
    } elseif (! is_numeric($productPrice)) {
        $errors["productPrice"] = "Product price must be a number";
    } elseif ($productPrice < 0){
        $errors["productPrice"] = "Min Product price is 0";
    } else {
        echo " Product Price(Before Discount) : $productPrice <br>";
        echo "Product Price(After Discount) : $discountPrice <br>";
    }

    //priceDiscount validtion
    //  if (empty($productPrice)) {
    //     $errors[] = "Product Price(After Discount) : Please enter product price <br>";
    // } elseif (! is_numeric($productPrice)) {
    //     $errors[] = "Product Price(After Discount) : Product price must be a number";
    // } elseif ($productPrice < 0){
    //     $errors[] = "Product Price(After Discount) : Product price must be greater than 0";
    // }
    // else {
    //     echo "Product Price(After Discount) : $discountPrice <br>";
    // }

    //display array of errors
    // if (! empty($errors)){
    //     print_r($errors);
    // }
    if (! empty($errors)){
        $_SESSION["errors"] = $errors;
        header("location: add-product.php");
    }

}

?>
<button><a href="add-product.php" class="text-white">Back</a></button>