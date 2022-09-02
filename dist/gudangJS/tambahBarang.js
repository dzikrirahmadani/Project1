// event modal box
const modal = document.querySelector('.modal');
const batal = document.querySelector('.modal > .modal-popup > #box > .content .btn .batal');
  
batal.addEventListener('click', () => {
    modal.style.display = 'none';
})

document.body.addEventListener('click', (e) => {
    if( e.target.id == 'btn-click' ){
        modal.style.display = "flex";
    }
})

// event ketika halaman di load
const container = document.querySelector('.container');
const titleTable = document.querySelector('.title-table');
const onload = () => {
    document.body.style.transition = 'all .6s .2s ease';
    document.body.style.opacity = '1';

    container.style.transition = 'all .6s .6s ease-in';
    container.style.opacity = '1';
    if( window.innerWidth > 1268){
        tambahBarangSlide(titleTable, '0');
    }else if( window.innerWidth <= 1268 && window.innerWidth > 1110){
        tambahBarangSlide(titleTable, '3%');
    }else if(window.innerWidth <= 1110 && window.innerWidth > 1023){
        tambahBarangSlide(titleTable, '5%');
    }else if(window.innerWidth <= 1023 && window.innerWidth > 435){
        tambahBarangSlide(titleTable, '-4%');
    }else if (window.innerWidth <= 435 && window.innerWidth > 387){
        tambahBarangSlide(titleTable, '-13%');
    }else if (window.innerWidth <= 387){
        tambahBarangSlide(titleTable, '-18%');
    }
}
const tambahBarangSlide = (obj, left) => {
    obj.style.left = left;
    obj.style.opacity = '1';
    obj.style.transition = 'all 1s .6s ease-in-out';
}

// hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const navInput = document.querySelector('.nav-input');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

