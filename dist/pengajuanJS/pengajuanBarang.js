const onload = () => {
    document.body.style.opacity = '1';
    document.body.style.transition = 'all .6s .2s ease';
  
    // event dashboard barang masuk onload
    const conTable = document.querySelectorAll('#content');
    const titleTable = document.querySelectorAll('.title-table');
    const navbarTable = document.querySelectorAll('.navbar-table');
  
    conTable.forEach(el => {
        el.style.opacity = '1';
        el.style.transition = 'all .6s .6s ease-in-out';
        el.style.animation = 'myanimate 5s .6s forwards';
    })

    titleTable.forEach(el => {
        el.style.opacity = '1';
        el.style.transition = 'all .6s .6s ease-in-out';
        el.style.animation = 'slideTop 1s .6s forwards';
    })

    navbarTable.forEach(el => {
        el.style.animation = 'slideTop 1s .7s forwards';
        el.style.opacity = '1';
        el.style.transition = 'all .6s .6s ease-in-out';
    })
  }