<div id='header'>
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
        $user = new User(null, "", "", "");
        $categories = $user->viewCategories();
        $i = 0;
        while ($i < sizeof($categories)){
            $category = $categories[$i];
            echo "<a href='products.php?categoryID=".$category->id."'>".$category->name."</a>";
            $i = $i + 1;
        }
        ?>
        <a href="aboutUs.php">About Us</a>
    </div>

    <!--Content-->
</div>