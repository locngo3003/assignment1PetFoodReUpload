<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loc's Assignment</title>
    <link rel="stylesheet" href="css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script2.js"></script>

</head>
<body onload="invoice()">
<?php
include_once "header.php"
?>
<h1>Featured Products</h1>
<div id="content" >
    <?php

    $categoryId = $_GET["categoryId"];
    $products = $user->showProductsByCategory($categoryId);
    $i = 0;
    while ($i < sizeof($products)) {
        $product = $products[$i];
    ?>
        <div id="productTable">
            <table border="1">
                <tr style="height: 339px">

                    <td class="product">
                        <img src="image/<?php echo $product->image;?>" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                        <p>Price: <?php echo $product->price;?></p>
                        <p>
                            Quantity:<input placeholder="qty" type="number">
                           <button name="<?php echo $product->name;?>"
                                   price = "<?php echo $product->price;?>"
                                   onclick="addProductToCart(this)">add to cart</button>
                        </p>
                    </td>

                </tr>
            </table>
            <?php
            $i = $i + 1;
            }
            ?>

        </div>

    <div id="rightDiv">
        <h2>Cart</h2>
        <button id ="checkOut" onclick="invoice()">Check out</button>
    </div>
    <!--Show product list-->

    <!--    invoice-->
    <div id="myModal" class="modal">

    <!-- Invoice content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id = "invoicePlace">Invoice</div>
    </div>

</div>

</div>
<footer>
    <div id="footer">&copy; School of Computing and Information, Unitec, NZ</div>
</footer>
</body>

</html>