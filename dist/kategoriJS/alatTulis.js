const onload = () => {
    document.body.style.opacity = '1';
    document.body.style.transition = 'all .6s .2s ease';
  
    // event dashboard barang masuk onload
    const conTable = document.querySelectorAll('#content');
    const titleTable = document.querySelectorAll('#title');
  
    conTable.forEach(el => {
      el.style.animation = 'myanimate 5s .6s forwards';
    })
    
    titleTable.forEach(el => {
      if( window.innerWidth > 1023 && window.innerWidth <= 1218){
          styles(el, '20%');
      }else if( window.innerWidth > 1218 ){
          styles(el, '17%');
      }else if( window.innerWidth < 1024){
          styles(el, '5%');
      }
      if( window.innerWidth <= 447 ){
         styles(el, '-2rem');
      }
    })
  }
  
  const styles = (titleTable, marginLeftTitle) => {
    titleTable.style.opacity = '1';
    titleTable.style.marginLeft = marginLeftTitle;
    titleTable.style.width = '80%';
    titleTable.style.transition = 'all .6s .6s ease-in';
  }