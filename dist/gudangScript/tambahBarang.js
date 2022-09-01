// event modal box
const modal = document.querySelector('.modal');const batal = document.querySelector('.modal > .modal-popup > #box > .content .btn .batal');
  
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
const onload = () => {
    document.body.style.transition = 'all .6s .2s ease';
    document.body.style.opacity = '1';

    container.style.transition = 'all .6s .6s ease-in';
    container.style.opacity = '1';
}
