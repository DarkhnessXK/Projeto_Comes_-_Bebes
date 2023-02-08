const cart = document.querySelector("#comesbebes_cart")

function cart_show() {
    cart.classList.remove("cart_hidden");
}


function cart_hidden() {
    cart.classList.add("cart_hidden");
}


document.querySelector('#comesbebes_cart_icon').addEventListener("click", ()=> {
    if(cart.classList.value.includes("cart_hidden")) {
        cart_show()
    }
})

document.querySelector('.cart_background_shadow').addEventListener("click", ()=> {
    if(!cart.classList.value.includes("cart_hidden")) {
        cart_hidden()
    }
})