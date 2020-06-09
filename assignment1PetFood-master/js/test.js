//Left Divider Animation start

//Left Divider Animation end

total = 0 //total price will show in my invoice
//localStorge
//add product to cart
function addProductToCart(e) {
    cart = $("#rightDiv");
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