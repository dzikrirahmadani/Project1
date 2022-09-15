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


//  REQUEST API
const api = ( async () => {
    return await fetch('http://localhost:8080/restful/public/Peminjaman', {method : "GET"})
            .then(response => response.json())
            .then(response => {
                let table = '';
                for(let i = 0; i < response.length; i++){
                    table += showTable(response[i], (i+1));
                }
                const body = document.getElementById('table-body');
                body.innerHTML = table;

                let tableHidden = '';
                let index = 0;
                tableHidden += showHidden(response[index], 1);
                const bodyHidden = document.getElementById('table-hidden');
                bodyHidden.innerHTML = tableHidden;
            })
})

const showTable = (m, no) => {
    return `
        <tr>
            <td>${no}</td>
            <td>${m.barang_dipinjam}</td>
            <td>${m.jumlah_barang}</td>
            <td>${m.tanggal_pinjam}</td>
            <td>${m.status_peminjaman}</td>
            <td class="table-btn">
                  <a href="#" class="sm:mr-[60px] md:mr-0 p-2 px-5 mx-1 rounded-lg text-white text-sm md:text-xs" style="background-color: #00C2FF;">ubah</a>
                  <a href="#" class="p-2 px-5 mx-1 rounded-lg text-white text-sm md:text-xs" style="background-color: #FF5050;">hapus</a>
            </td>
        </tr>
    `
}

const showHidden = (response, no) => {
    return `
    <tr>
        <th class="text-semibold">No</th>
        <td>${no}</td>
    </tr>
    <tr>
        <th class="text-semibold">nama barang</th>
        <td>${response.barang_dipinjam}</td>
    </tr>
    <tr>
        <th class="text-semibold">jumlah</th>
        <td>${response.jumlah_barang}</td>
    </tr>
    <tr>
        <th class="text-semibold">tanggal pinjam</th>
        <td>${response.tanggal_pinjam}</td>
    </tr>
    <tr>
        <th class="text-semibold">status peminjaman</th>
        <td>${response.status_peminjaman}</td>
    </tr>
    <tr>
        <th class="text-semibold">Aksi</th>
        <td class="table-btn">
        <a href="#" class="sm:mr-[60px] md:mr-0 p-2 px-5 mx-1 rounded-lg text-white text-sm md:text-xs" style="background-color: #00C2FF;">ubah</a>
        <a href="#" class="p-2 px-5 mx-1 rounded-lg text-white text-sm md:text-xs" style="background-color: #FF5050;">hapus</a>
        </td>
    </tr>`;
}

api();