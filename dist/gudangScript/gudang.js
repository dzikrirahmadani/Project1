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


// REQUEST API
fetch(`http://localhost:8080/restful/public/barang`)
.then(response => response.json())
.then(response => {

    let table = '';
    for( let i = 0; i < response.length; i++ ){
        table += showTable(response[i], i);
    }
    const tbody = document.getElementById('tbody');
    tbody.innerHTML = table;

})

const showTable = (m, no) => {
return `
    <tr>
        <td>${no += 1}</td>
        <td>${m.nm_barang}</td>
        <td>${m.spesifikasi}</td>
        <td>${m.kategori}</td>
        <td>${m.satuan}</td>
    </tr>`;
}