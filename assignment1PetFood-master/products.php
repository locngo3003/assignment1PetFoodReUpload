<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>
<body onload="leftDividerAnimation()">

<?php
include_once "header.php";
?>

<div id = "content">
    <p>Food Page</p>
    <div id = "leftDiv">
        <img id = "leftDivPic" src="image/header.jpg">
    </div>
    <div id = "middle">
        <?php
        $categoryId = $_GET["categoryId"];
        $products = $user->showProductsByCategory($categoryId);
        $i = 0;
        while ($i<sizeof($products)){
            $product = $products[$i];
            ?>
            <div class="product">
                <p><img src="image/<?php echo $product->image;?>"></p>
                <p>Price: <?php echo $product->price;?></p>
                <p>
                    <input placeholder="qty" type="number">
                    <button name="<?php echo $product->name; ?>"
                            price = "<?php echo $product->price; ?>"
                            onclick="addProductToCart(this)">Add to cart</button>
                </p>
            </div>
            <?php
            $i = $i + 1;
        }
        ?>



    </div>
    <div id="rightDiv">
        <h2>Cart</h2>
        <button id ="checkOut" onclick="invoice()">Check out</button>
    </div>
</div>

<!-- The Invoice -->
<div id="myModal" class="modal">

    <!-- Invoice content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id = "invoicePlace">Invoice</div>
    </div>

</div>

<?php
include_once "footer.php";
?>
</body>
</html>