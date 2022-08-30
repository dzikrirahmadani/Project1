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


// script ketika halaman di load untuk dashboard
const thumb = document.querySelectorAll('.thumb');
const onload = () => {
  document.body.style.opacity = '1';
  document.body.style.transition = 'all .6s .2s ease';

  for(let i = 0; i < thumb.length; i++){
    setTimeout(() => {
      thumb[i].classList.add('muncul');
      thumb[i].style.transition = 'all .5s .5s ease';
    }, 100 * (i + 1));
  }


  // event dashboard barang keluar onload
  const conTable = document.querySelector('#content-1');
  const titleTable = document.querySelector('#title-1');
  conTable.style.animation = 'myanimate 5s .6s forwards';
  titleTable.style.opacity = '1';
  titleTable.style.marginLeft = '18%';
  titleTable.style.width = '80%';
  titleTable.style.transition = 'all .6s .6s ease-in'

  document.body.style.opacity = '1';
  document.body.style.transition = 'all .6s .2s ease';
  // end of event dashboard barang keluar onload
}

thumb.forEach(el => {
  el.addEventListener('mouseover', function() {
    this.style.transition = "all .5s ease-in-out";
    this.style.transform = "scale(1.06, 1.06)";
    this.style.boxShadow = "0 2px 5px .1px #B7BCC4";
  })
  el.addEventListener('mouseleave', function(){
    this.style.transition = "all .4s ease-in-out";
    this.style.transform = "scale(1,1)";
    this.style.boxShadow = 'none';
  })
})