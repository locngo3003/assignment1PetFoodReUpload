function enlangeImage(e) {
    e.style.height=200+"px"

}
function normalImage(e) {
    e.style.height=128+"px"
}
function addToCart(e) {
    cart = document.getElementById("cartDiv");
    switch (e.id) {
        case "addDogFood":
            qty = document.getElementById("dogFoodQty").value;
            if (qty<=0){
                alert("QUANTITY MUST MORE THAN ZERO");
                break;
            }
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Dog Food: <input type="number" class="cartInput" id = "cartDogFood" pName = "DogFood" price="12" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 12)
                    + '</p>');
            break;
        case "addDogFood2":
            qty = document.getElementById("dogFood2Qty").value;
            if (qty<=0){ //make sure quantity must be more than zero
                alert("QUANTITY MUST MORE THAN ZERO");
                break;
            }
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Dog Food 2: <input type="number" class="cartInput" id = "cartDogFood2" pName = "DogFood2" price="20" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 20)
                    + '</p>');
            break;
        case "addCatFood":
            qty = document.getElementById("catFoodQty").value;
            if (qty<=0){
                alert("QUANTITY MUST MORE THAN ZERO");
                break;
            }
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Cat Food: <input type="number" class="cartInput" id = "cartCatFood" pName = "CatFood" price="32" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 32)
                    + '</p>');
            break;
        case "addBirdFood":
            qty = document.getElementById("birdFoodQty").value;
            if (qty<=0){
                alert("QUANTITY MUST MORE THAN ZERO");
                break;
            }
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Bird Food: <input type="number" class="cartInput" id = "cartBirdFood" pName = "BirdFood" price="27" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 27)
                    + '</p>');
            break;

        default:

    }

}

total = 0 //total price will show in my invoice
//localStorge
//add product to cart
function addProductToCart(e) {
    cart = $("#voicePage");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    cart.append("<p>Name: "+name1+"  Price: "+Number(price)*Number(qty) +"</p>");
    total = total + Number(price)*Number(qty);
}

//Popup Invoice

function invoice() {
    modal = document.getElementById("myModal");
    modal.style.display = "block";
    // Get the <span> element that closes the modal
    cross = document.getElementsByClassName("close")[0];
    console.log(cross);
    cross.onclick = function() {
        modal.style.display = "none";
    }
// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //Take everything from shopping cart
    $("#invoicePlace").empty();
    i = 0;
    while (i < $("#rightDiv").children().length){
        // console.log($("#rightDiv").children()[i]);
        $("#invoicePlace").append($("#rightDiv").children()[i]);
        i=i+1;
    }

    $("#invoicePlace").append("<p>Total: "+total+"</p>");

}



function moveImage() {
    image = document.getElementById("movingImg");
    x = 10; //left
    y = 10; //top
    speed = Number(document.getElementById("speedInput").value);
    // create a function in loop, and loop it each half second
    setInterval(function () {
        if (x <200 && y <= 10){
            x = x + speed;
        }
        if (x >= 200 && y < 200){
            y = y + speed;
        }
        if (x > 10 && y >= 200){
            x = x - speed;
        }
        if (x <= 10 && y >10){
            y = y - speed;
        }
        image.style.left = x+"px";
        image.style.top = y+"px";
    }, 1);
}
