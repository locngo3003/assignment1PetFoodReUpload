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
function invoice() {

    voicePage = document.getElementById("voicePage");
    //Get the button that opens the modal
    var btn = document.getElementById("showInvoiceBut");

    //Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    //When the user clicks on the button, open the modal
    btn.onclick = function() {
        cart = document.getElementsByClassName("cartInput");
        voiceContent = document.getElementById("voice-content");
        Total = 0; // initial Total
        FinalTotal =0; // Final Total after calculate shipping fee
        ShippingFee = 7; // default fee for shipping
        var elems = document.getElementsByClassName("items");
        i = 0
        while (i<elems.length){
            elems[i].parentNode.removeChild(elems[i]);
        }


        i = 0;
        while (i < cart.length) {
            console.log(cart[i].id);
            qty = cart[i].value;
            switch (cart[i].id) {
                case "cartDogFood":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog Food: Qty:'+ qty +' Price:$' + (Number(qty) * 12)+ '</p>');
                    Total += (Number(qty) * 12);
                    //checking total order price for free shipping
                    if (Total>300){
                        FinalTotal =Total
                        alert('Congraturation !!! Shipping is now free for order over 300$')
                    }
                    else {
                        FinalTotal= Total + ShippingFee
                    }
                    break;
                case "cartDogFood2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog Food2: Qty:'+ qty +' Price:$' + (Number(qty) * 20)+ '</p>');
                    Total += (Number(qty) * 20);
                    if (Total>300){
                        FinalTotal =Total
                        alert('Congraturation !!! Shipping is now free for order over 300$')
                    }
                    else {
                        FinalTotal= Total + ShippingFee
                    }
                    break;
                case "cartCatFood":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cat Food: Qty:'+ qty +' Price:$' + (Number(qty) * 32)+ '</p>');
                    Total += (Number(qty) * 32);
                    if (Total>300){
                        FinalTotal =Total
                        alert('Congraturation !!! Shipping is now free for order over 300$')
                    }
                    else {
                        FinalTotal= Total + ShippingFee
                    }
                    break;
                case "cartBirdFood":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Bird Food: Qty:'+ qty +' Price:$' + (Number(qty) * 27)+ '</p>');
                    Total += (Number(qty) * 27);
                    if (Total>300){
                        FinalTotal =Total
                        alert('Congraturation !!! Shipping is now free for order over 300$')
                    }
                    else {
                        FinalTotal= Total + ShippingFee
                    }
                    break;

                default:
                // code block
            }

            i++;

        }
        voiceContent.insertAdjacentHTML(
            'beforeend',
            '<p class = "items">Total and Shipping fee: $'+ FinalTotal+'</p>');


    }



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
