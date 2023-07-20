var qtyElement = document.getElementById("qty");
var qty = 1;

function increaseQty() {
    qty++;
    updateQty();
}

function decreaseQty() {
    if (qty > 1) {
        qty--;
        updateQty();
    }
}

function updateQty() {
    qtyElement.value = qty;
}
