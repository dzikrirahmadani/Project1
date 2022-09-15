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
fetch('http://localhost:8080/restful/public/barang')
.then(response => response.json())
.then(response => {

    // table
    let table = '';
    for( let i = 0; i < response.barang.length; i++ ){
        table += showTable(response.barang[i], i);
    }
    const tbody = document.getElementById('tbody');
    tbody.innerHTML = table;

    // table hidden
    let tableHidden = '';
    let index = 0;
    tableHidden += showHidden(response.barang[index], 1);
    const bodyHidden = document.getElementById('table-hidden');
    bodyHidden.innerHTML = tableHidden;
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

const showHidden = (response, no) => {
    return `
        <tr>
            <th class="font-semibold">no</th>
            <td>${no}</td>
        </tr>
        <tr>
            <th class="font-semibold">nama barang</th>
            <td>${response.nm_barang}</td>
        </tr>
        <tr>
            <th class="font-semibold">spesifikasi</th>
            <td>${response.spesifikasi}</td>
        </tr>
        <tr>
            <th class="font-semibold">kategori</th>
            <td>${response.kategori}</td>
        </tr>
        <tr>
            <th class="font-semibold">satuan</th>
            <td>${response.satuan}</td>
        </tr>
    `;
}