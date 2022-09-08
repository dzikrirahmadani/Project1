const card = document.querySelectorAll('.cards > .card');
const onload = () => {
    document.body.style.opacity = '1';
    document.body.style.transition = 'all .6s .2s ease-in-out';

    for(let i = 0; i < card.length; i++){
        setTimeout(() => {
            card[i].style.opacity = '1';
            card[i].style.transition = 'all .5s .4s ease-in-out';
            card[i].style.animation = 'myanimate 1s forwards';  
        },300 * (i + 1));
    }
}