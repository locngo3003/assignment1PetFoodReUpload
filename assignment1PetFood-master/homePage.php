<!--
header,body, footed: done;
navigation: done;
css: done;
js animation: done;
add shipping fee: done;
detect free shipping: done;
show invoice: done;
calculate price*quantity and show:done;
searching box: not required;
https://assignment2php.herokuapp.com/assignment1PetFood-master/homePage.php
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loc's Assignment</title>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body  onload="invoice()">

<div id = 'header' >
    <div style=" display: flex">
        <div style="width: 50%">
            <h1 id="petfood">Pet Food</h1>
            <input placeholder="Find the best for your pet">
            <button style="border-radius: 90%"> search</button>
        </div>
        <div style="width: 50%; text-align: right; padding-right: 50px">
            <div style="margin-left: 100px">
                <img src="image/shipping.png" height="20px" width="30px"/>
                <!--css animation-->
                <span id="animation"><strong>Free Shipping</strong> over $300</span>
                <p>Contact us 022************</p>
                <p> Facebook:facebook.com/petfood</p>
                <p>email:petfood@gmail.com</p>
            </div>
        </div>
    </div>
    <!--navigationbar-->
    <div id="topnav">
        <a class="active" href="homePage.php">Home Page</a>
<!--        <a id="dog" href="foodForDog.html">Dog</a>-->
<!--        <a id="cat" href="foodforCat.html">Cat</a>-->
<!--        <a id="other" href="otherPet.html">Other</a>-->
        <?php
        include_once "class/User.php";
        $user = new User(null,"","","");
        $categories = $user ->viewCategories();
        $i =0;
        while ($i <sizeof($categories)){
            $category= $categories[$i];
            echo "<a href='foodForDog.html'>".$category->name."</a>";
            $i = $i+1;
        }

        ?>
    </div>
    <a href="aboutUs.php">About Us</a>
    <!--Content-->
</div>
<h1>Featured Products</h1>
<div id="content" >
    <!--Show product list-->
    <div id="productTable">
        <table border="1">
            <tr style="height: 339px">

                <td class="product">
                    <img src="image/dogfood.png" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$12 ea</p>
                    <p>
                        Quantity:<input class="qty" id="dogFoodQty" type="number">
                        <button class = "addBut" id="addDogFood" onclick="addToCart(this); thongbao()" >Add to Cart</button>
                    </p>
                </td>
                <td class="product">
                    <img src="image/dogfood2.jpeg" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$20 ea</p>
                    <p>
                        Quantity:<input class="qty" id="dogFood2Qty" type="number">
                        <button class = "addBut" id="addDogFood2" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </td>
                <td class="product">
                    <img src="image/catfood.jpeg" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$32 ea</p>
                    <p>
                        Quantity:<input class="qty" id="catFoodQty" type="number">
                        <button class = "addBut" id="addCatFood" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </td>
                <td class="product">
                    <img src="image/bird.png" height="128" width="128"  onmouseleave="normalImage(this)" onmousemove="enlangeImage(this)"/>
                    <p>$27 ea</p>
                    <p>
                        Quantity:<input class="qty" id="birdFoodQty" type="number">
                        <button class = "addBut" id="addBirdFood" onclick="addToCart(this)">Add to Cart</button>
                    </p>
                </td>

            </tr>
        </table>
    </div>
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
<!--js animation-->
<div id="divAnimation">
   <div id="jsanimation">
       <button onclick="moveImage()">Move Picture</button>
       <p>
           speed: <input id="speedInput" type="number">
       </p>
       <div>
           <img id="movingImg" src="image/bird.png" height="225" width="225"/>
       </div>
   </div>

    <!--css animation-->
    <div id="imageAnimation">
        <img src="image/dogfood.png" />
        <img src="image/bird.png" />
        <img src="image/catfood.jpeg" />
        <img src="image/dogfood2.jpeg" />
    </div>
</div>
<footer>
    <div id="footer">&copy; School of Computing and Information, Unitec, NZ</div>
</footer>
</body>

</html>