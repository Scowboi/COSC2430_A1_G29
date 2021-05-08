if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}




function ready() {
    
    for (var i = 0; i < localStorage.length; i++){
        if (localStorage.key(i) != null)
        executeAdd();
    }


    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    

}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}


function executeAdd(){
    var title = localStorage.getItem('product')
    var pricestr = localStorage.getItem('price')
    var imageSrc = localStorage.getItem('image')
    var iniquantity = localStorage.getItem('quantityNumber')
    if(title !== "undefined"){
        addItemToCart(title,pricestr,imageSrc,iniquantity)
        localStorage.clear()
        updateCartTotal()
    }

}

function addItemToCart(title, pricestr, imageSrc, iniquantity) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${pricestr}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="${iniquantity}">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseInt((priceElement.innerText.replaceAll(',', '')).replace('VND', ''))
        console.log(priceElement.innerText.replaceAll(',', ''))
        var quantity = parseInt(quantityElement.value)
        total = total + (price * quantity)
    }
    document.getElementsByClassName('cart-total-price')[0].innerText = total + ' VND'
}
