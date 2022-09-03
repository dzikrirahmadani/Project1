const card = document.querySelectorAll('.card');

const onload = () => {
    for(let i = 0; i < card.length; i++){
        setTimeout(() => {
            card[i].classList.add('muncul');
            card[i].style.transition = 'all .5s ease-in-out';
        }, 100 * (i + 1));
    }
}