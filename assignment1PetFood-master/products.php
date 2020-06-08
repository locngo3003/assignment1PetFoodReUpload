<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loc's Assignment</title>
    <link rel="stylesheet" href="css/style.css">
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
                        <p>Price: <?php echo $product->prce;?></p>
                        <p>
                            Quantity:<input class="qty" id="dogFoodQty" type="number">
                            <button class = "addBut" id="addDogFood" onclick="addToCart(this); thongbao()" >Add to Cart</button>
                        </p>
                    </td>
                    <td class="product">
                        <img src="image/<?php echo $product->image;?>" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                        <p>Price: <?php echo $product->prce;?></p>
                        <p>
                            Quantity:<input class="qty" id="dogFood2Qty" type="number">
                            <button class = "addBut" id="addDogFood2" onclick="addToCart(this)">Add to Cart</button>
                        </p>
                    </td>


                </tr>
            </table>
        </div>
    <?php
        $i = $i + 1;
    }
    ?>
    <!--Show product list-->

    <!--    invoice-->
    <div id="voicePage" class="voice">
        <!-- Modal content -->
        <div id="voice-content">
            <p>Cart:</p>
            <div id="cartDiv"></div>
            <button id="showInvoiceBut">Invoice</button>
        </div>

    </div>
</div>
<footer>
    <div id="footer">&copy; School of Computing and Information, Unitec, NZ</div>
</footer>
</body>

</html>