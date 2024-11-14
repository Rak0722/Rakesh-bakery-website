let navbar = document.querySelector('.header .navbar');
let menu = document.getElementById('menu-btn');

menu.addEventListener("click",()=>{
    // alert();
    menu.classList.toggle('.fa-xmark');
    navbar.classList.toggle('active');
})



let cart = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cart.classList.add('active');
}

document.querySelector('#close-form').onclick = () =>{
    cart.classList.remove('active');
}



let textarea = document.querySelector(".resize-ta");
textarea.addEventListener("keyup", () => {
  textarea.style.height = calcHeight(textarea.value) + "px";
});

// var swiper = new Swiper(".home-slider",{
//     grabCursor:true,
//     loop:true,
//     cnteredSlides:true,
//     navigation:{
//         nextEl:"swiper-button-next",
//         nextEl:"swiper-button-prev",
//     },
// });