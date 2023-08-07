let menu= document.querySelector('#menu-btn');
let navlbar=document.querySelector('.header .navlbar');
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navlbar.classList.toggle('active');
};

menu.onscroll = () => {
    menu.classList.remove('fa-times');
    navlbar.classList.remove('active');
};

window.onscroll= () =>{
  menu.classList.remove('fa-times');
  navlbar.classList.remove('active');
};
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextE1: ".swiper-button-next",
      prevE1: ".swiper-button-pre",
    },
});

/*var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
autoHeight:true,
grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

*/
let loadMoreBtn=document.querySelector('.pakages .load-more .btn');
let currentItem=3;

loadMoreBtn.onclick=() =>{
  let boxes=[...document.querySelectorAll('.pakages .box-container .box')];
for(var i=currentItem; i<currentItem+3;i++)
{
boxes[i].style.display='inline-block';
};
currentItem+=3;
if(currentItem>=boxes.length)
{
  loadMoreBtn.style.display='none';
}
}