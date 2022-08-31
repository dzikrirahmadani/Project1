const content = document.querySelectorAll('#container');
const onload = () => {

    document.body.style.opacity = '1';
    document.body.style.transition = 'all .6s .2s ease';

    content.forEach(el => {
        el.style.animation = 'myanimate 5s .6s forwards';
    })
}