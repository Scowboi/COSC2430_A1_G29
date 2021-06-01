



if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

// var FinalElement = document.getElementsByClassName('cart-final')
// var FinalPrice = FinalElement.getElementsByClassName('cart-total-price')

// var CouponInput = CouponElement.input
// var failCpElement = document.getElementById('fail-coupon')

var output1 = updateCartSumary()
var num
function ready() {



    // for (var i = 0; i < localStorage.length; i++){
    //     if (localStorage.key(i) != null)
    //     executeAdd();
    // }


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
    updateCartSumary()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartSumary()

}


// function executeAdd(){
//     var title = localStorage.getItem('product')
//     var pricestr = localStorage.getItem('price')
//     var imageSrc = localStorage.getItem('image')
//     var iniquantity = localStorage.getItem('quantityNumber')
//     if(title !== "undefined"){
//         addItemToCart(title,pricestr,imageSrc,iniquantity)
//         localStorage.clear()
//         updateCartSumary()
//         changeFinal()
      
//     }

// }

function addItemToCart(title, pricestr, imageSrc, iniquantity) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == 'randomtext to disable the command') {
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

function updateCartSumary() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    var final = 0
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


    function couponcheck(){
        var CouponInputs = document.getElementsByClassName('cart-coupon-input')

                    if (CouponInputs.value === 'COSC2430-HD'){
                        return 1;                   
                    } else if(CouponInputs.value === 'COSC2430-DI'){
                       
                        return 2;
                    } else {
                        return 3;
                    }
    }

// function changeFinal(){
//     var finalElement = (document.getElementsByClassName('cart-final')).getElementsByClassName('cart-total-price')[0]
//     var cartItemContainer = document.getElementsByClassName('cart-items')[0]
//     var cartRows = cartItemContainer.getElementsByClassName('cart-row')
//     var CouponElement = document.getElementsByClassName('cart-coupon');
//     var CouponInput = CouponElement.input
//     var failCpElement = document.getElementById('fail-coupon')
//     var total = 0
//     var final = 0
//     for (var i = 0; i < cartRows.length; i++) {
//         var cartRow = cartRows[i]
//         var priceElement = cartRow.getElementsByClassName('cart-price')[0]
//         var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
//         var price = parseInt((priceElement.innerText.replaceAll(',', '')).replace('VND', ''))
//         console.log(priceElement.innerText.replaceAll(',', ''))
//         var quantity = parseInt(quantityElement.value)
//         total = total + (price * quantity)
//         final = total
//     }
//     if (CouponInput.value){
//         if (CouponInput.value === 'COSC2430-HD'){
//             final = (total*20)/100 + ' VND'
//             finalElement.innerText = final
//         } else if(CouponInput.value === 'COSC2430-DI'){
//             final = (total*20)/100 + ' VND'
//             finalElement.innerText = final
//         } else {
//             final = total + ' VND'
//             finalElement.innerText = final
//             failCpElement.innerHTML = 'invalid coupon'
//         }
//     }
//         finalElement.innerText = final
//         failCpElement.innerHTML = ''}
    
// 
