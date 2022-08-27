//
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const navInput = document.querySelector('.nav-input');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

const popup = document.querySelector('.modal-popup');
  // event popup box
  document.body.addEventListener('click', (e) => {
    if( e.target.id == 'logout' ){
      popup.style.display = 'flex';
    }else if(e.target.id == 'confirmErr'){
      popup.style.display = 'none';
    }
  })

// var btnContainer = document.getElementById("sidebar");
// var btns = btnContainer.getElementsByClassName("side");

// for(var i = 0; i <btns.length; i++){
//     btns[i].addEventListener('click',function(){
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace("active");
//         this.className += "active";
//     })
// }

// $('.side').click(function() {
//     $(this).addClass("active").siblings().removeClass("active");
// });