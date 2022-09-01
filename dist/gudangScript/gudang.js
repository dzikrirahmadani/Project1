const content = document.querySelectorAll('#container');
const titleTable = document.querySelectorAll('.title-table');
const onload = () => {

    document.body.style.opacity = '1';
    document.body.style.transition = 'all .6s .2s ease';

    content.forEach(el => {
        el.style.animation = 'myanimate 5s .6s forwards';
    });

    titleTable.forEach(el => {
        el.style.opacity = '1';
        el.style.transition = 'all .6s .6s ease-in';
    })
}

// Hamburger Menu
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const navInput = document.querySelector('.nav-input');

hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});