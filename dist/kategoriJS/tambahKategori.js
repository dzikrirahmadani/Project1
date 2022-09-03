const popup = document.querySelector('.modal-popup');
  // event popup box
  document.body.addEventListener('click', (e) => {
    if( e.target.id == 'logout' ){
      popup.style.display = 'flex';
    }else if(e.target.id == 'confirmErr'){
      popup.style.display = 'none';
    }
  })

const content = document.querySelector('#content');
    content.style.opacity = '0';
    content.style.transform = 'none';
const onload = () => {
    document.body.style.opacity = '1';
    document.body.style.transition = 'all .5s .3s ease-in-out';
    
    content.style.animation = 'myanimate2 1s .6s forwards';
}