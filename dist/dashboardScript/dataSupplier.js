const content = document.querySelector('#cont-1');
const content2 = document.querySelector('#cont-2');

const navbarTable = document.querySelectorAll('.navbar-table');
const onload = () => {
    document.body.style.opacity = '1';
    document.body.style.transition = 'all .6s .2s ease';

    content.style.animation = 'myanimate 5s .6s forwards';
    content2.style.animation = 'myanimate 5s .6s forwards';

    navbarTable.forEach(el => {
        el.style.opacity = '1';
        el.style.transition = 'all .6s .6s ease-in';
    })
}