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


// script ketika halaman di load untuk dashboard
const thumb = document.querySelectorAll('.thumb');
const onload = () => {
  document.body.style.opacity = '1';
  document.body.style.transition = 'all .6s .2s ease';

  for(let i = 0; i < thumb.length; i++){
    setTimeout(() => {
      thumb[i].classList.add('muncul');
      thumb[i].style.transition = 'all .5s ease';
    }, 100 * (i + 1));
  }

  // event dashboard barang keluar onload
  const conTable = document.querySelector('#content-1');
  const titleTable = document.querySelector('#title-1');
  const conTable2 = document.querySelector('#content-2');
  const titleTable2 = document.querySelector('#title-2');

  // responsive javascript
  if( window.innerWidth > 1023 && window.innerWidth <= 1218){
    styles(conTable, titleTable, '20%');
  }else if( window.innerWidth > 1218 ){
    styles(conTable, titleTable, '16%');
  }else if( window.innerWidth < 1024){
    styles(conTable, titleTable, '5%');
    styles(conTable2, titleTable2, '5%');
  }

  // end of event dashboard barang keluar onload
}

const styles = (conTable, titleTable, marginLeftTitle) => {
  conTable.style.animation = 'myanimate 5s .6s forwards';
  titleTable.style.opacity = '1';
  titleTable.style.marginLeft = marginLeftTitle;
  titleTable.style.width = '80%';
  titleTable.style.transition = 'all .6s .6s ease-in';
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