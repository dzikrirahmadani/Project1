<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- G-Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Kaisei+Tokumin:wght@400;500;700&family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
  <!-- End G-Font -->
  <title>Peminjaman Hari Ini</title>
  <!-- <link href="/dist/output.css" rel="stylesheet"> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../../src/pagination.css">
<!--  -->
  <style type="text/tailwindcss">
    @layer utilities {

      *, html, body{
    margin: 0;
    padding: 0;
    /* font-family: 'Inter', sans-serif; */
    }

body{
  background-color: #F3E8FF;
  opacity: 0;
}

.content{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.content-hidden{
  display: none;
}

.content-hidden-2{
  display: none;
}

/* header table style */
.title-table, .navbar-table{
  position: absolute;
  width: 80%;
  margin: auto;
  margin-top: 5rem;
  margin-bottom: 5rem;
  margin-left: 18%;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 5px;
  padding-left: 1.5rem;
  border-radius: .5rem;
  box-shadow: 0 0 .1rem rgba(0, 0, 0, 0.8);
  background-color: #fff;
  display: flex;
  flex-direction: row;
  align-items: center;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
}
.title-table{
  margin-top: 8.7rem;
  justify-content: left;
}
.title-table > .brand{
  display: flex;
  align-items: center;
  justify-content: center;
  padding: .5rem;
}
.title-table > .brand > a{
  margin-left: -.5rem;
  margin-right: 2rem;
}
.title-table > .brand > a > img{
  height: 2rem;
}
.title-table > .brand > p{
  font-weight: 600;
  font-size: 1.3em;
  color: #7B2A8C;
}
.title-table > .input-field > button{
  height: 2.1rem;
  border-radius: 5px;
  border: none;
  background-color: #7B2A8C;
  color: #fff;
  text-transform: capitalize;
  cursor: pointer;
  padding-left: 1rem;
  padding-right: 1rem;
  font-size: .8rem;
}
.title-table > .title > p{
  color: #3B296F;
}
.navbar-table{
  background: none;
  box-shadow: none;
  padding: 0;
}
.navbar-table > .brand > p{
  font-size: 1.5em;
  color: #7B2A8C;
}
.navbar-table > .input-field > a{
  padding: 1.5rem;
  padding-top: .4rem;
  padding-bottom: .4rem;
  border-radius: .5rem;
  color: #fff;
  background-color: #7B2A8C;
}
.title-table > .input-field{
  width: 100%;
}
.navbar-table > .input-field > a:nth-child(2){
  padding-left: 2rem;
  padding-right: 2rem;
}
/* end of header table style */



/* table style */
.container-table{
  position: absolute;
  top: 12.5rem;
  left: 18%;
  width: 80%;
  background-color: #fff;
  border-radius: .5rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
  padding-bottom: .001rem;
}

.table{
  width: 100%;
  border-radius: .5rem .5rem 0 0;
  overflow: hidden;
  text-align: center;
  text-transform: capitalize;
  margin-bottom: 2rem;
}

.table > thead > tr > th{
  padding: 1rem;
  font-weight: lighter;   
}
.table > thead{
  border-radius: 5rem;
  background: linear-gradient(#3B296F, #7B2A8C);
  color: white;
}

.table > tbody > tr{
  border-bottom: .01rem solid #B7BCC4;
}
.table tbody tr td{
  padding: 1rem;
  color: #0F172A;
}
.table > .container-table{
  padding: 1.5rem;
}

.table-footer{
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  align-items: center;
  margin: 1.8rem;
}
.table-footer .prev{
  border: .08rem solid #7B2A8C;
  padding: .3rem;
  background-color: #7B2A8C;
  box-sizing: border-box;
  cursor: pointer;
  color: white;
  border-radius: .5rem 0 0 .5rem;
  width: 7rem;
  display: flex;
  justify-content: center;
  align-items: center;
}
.table-footer > .prev > span{
  margin-inline: .5rem;
}

.table-footer .field{
  padding: .3rem;
  width: 2%;
  border-left: none;
  border-right: none;
  border-top: .08rem solid #707070;
  border-bottom: .08rem solid #707070;
  text-align: center;
  color: #707070;
}
.table-footer .next{
  border: .08rem solid #7B2A8C;
  padding: .3rem;
  background-color: #7B2A8C;
  box-sizing: border-box;
  width: 7rem;
  border-radius: 0 .5rem .5rem 0;
  cursor: pointer;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
}
.table-footer > .next > span{
  margin-inline: .5rem;
}

/* animate */
.container-table{
  max-height: 3.5rem;
  overflow: hidden;
  opacity: 0;
}
.title-table{
  opacity: 0;
}
.navbar-table{
  opacity: 0;
}
@keyframes myanimate {
  0%{
    max-height: 3.5rem;
    overflow: hidden;
  }
  100%{
    max-height: 100%;
  }
}
@keyframes slideTop {
  0%{
    transform: translate(0, -5rem);
  }
  100%{
    tranform: none;
  }
}
/* end of table style */

/* responsive */
@media screen and (max-width: 1182px){
  .container-table{
    width: 70%;
    margin-left: 5%;
  }
  .title-table, .navbar-table{
    width: 70%;
    margin-left: 23%;
  }
  .table > tbody > tr > .table-btn{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .table > tbody > tr > .table-btn > a{
    margin-top: .1rem;
    margin-bottom: .1rem;
  }
}
@media screen and (max-width: 1070px){
  .container-table{
    font-size: .9rem;
  }
}
@media screen and (max-width: 1023px){
  .container-table, .title-table, .navbar-table{
    left: 0;
    width: 90%;
  }
  .title-table, .navbar-table{
    margin-left: 5%;
  }
}
@media screen and (max-width: 991px){
  .containers{
    display: flex;
  }
}
@media screen and (max-width: 989px){
  .table > tbody > tr > .table-btn{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .table > tbody > tr > .table-btn > a{
    margin-top: .1rem;
    margin-bottom: .1rem;
  }
}
@media screen and (max-width: 865px){
   .content{
     display: none;
   }
   .content-hidden{
     display: flex;
   }
   .table > thead > tr > td{
     background-color: #fff;
     color: #000;
     border-bottom: .1rem solid #B7BCC4;
   }
   .table > thead > tr > th{
     width: 10rem;
   }
   .table-footer > .field{
     width: 1.5rem;
   }
   .title-table, .navbar-table{
     position: absolute;
     left: -2.5rem;
   }
   .title-table > .brand{
     width: 100%;
     text-align: center;
   }
   .title-table, .navbar-table{
     margin-left: 10%;
     margin-right: 0;
   }
 }
@media screen and (max-width: 639px){
  .title-table{
    display: flex;
    flex-direction: column;
  }
  .title-table > .input-field{
    margin-top: 1.1rem;
  }
  .title-table{
    font-size: 1.4em;
  }
  .title-table > .input-field > p{
    margin-top: -.8rem;
  }
  .title-table, .navbar-table{
    margin-left: 11.5%;
    margin-right: 0;
  }
}
@media screen and (max-width: 540px){
  .title-table > .input-field > input, .title-table > .input-field > button{
    width: 100%;
    margin-left: -.5rem;
  }
  .title-table > .input-field > button{
    margin-top: .5rem;
  }
  .title-table{
    margin-top: 12rem;
  }
  .container-table{
    margin-top: 3rem;
  }
  .navbar-table{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .navbar-table > .input-field{
    margin-top: 1.5rem;
  }
  .title-table, .navbar-table{
    margin-left: 12.5%;
    margin-right: 0;
  }
}
@media screen and (max-width: 454px){
  .title-table, .navbar-table{
    margin-left: 13.9%;
    margin-right: 0;
  }
}
@media screen and (max-width: 422px){
  .table > thead > tr > .table-btn > a{
    margin-inline: 0;
  }
}
@media screen and (max-width: 402px){
  .table > thead > tr > .table-btn > a{
    padding: .5rem;
    font-size: .6em;
  }
  .title-table, .navbar-table{
    margin-left: 15.5%;
    margin-right: 0;
  }
}
@media screen and (max-width: 368px){
  .title-table{
    text-align: center;
    padding: 0;
    padding-bottom: .5rem;
    padding-right: .5rem;
    padding-left: .5rem;
  }

}
@media screen and (max-width: 319px){
  .title-table, .navbar-table{
    margin-left: 17%;
    margin-right: 0;
  }
}
@media screen and (max-width: 284px){
  .container-table{
    top: 14.5rem;
  }
  .title-table, .navbar-table{
    margin-left: 19%;
    margin-right: 0;
  }
}
@media screen and (max-width: 305px){
  .input-field{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .input-field > a{
    margin-top: .5rem;
    margin-bottom: .5rem;
  }
  .title-table{
    margin-top: 16rem;
  }
  .container-table{
    top: 18.5rem;
  }
  .navbar-table{
    margin-top: 5rem;
  }
  .title-table{
    margin-top: 12rem;
  }
  .title-table > .input-field > p{
    font-size: .8rem;
  }
  .container-table{
    top: 11.5rem;
  }
  .navbar-table > .input-field > a{
    font-size: .6em;
  }
}
@media screen and (max-width: 260px){
  .container-table, .title-table{
    overflow: hidden;
  }
  .title-table, .navbar-table{
    margin-left: 20%;
    margin-right: 0;
  }
}
@media screen and (max-width: 246px){
  .navbar-table > .brand > p{
    font-size: 1em;
  }
  .table > thead > tr > .table-btn{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .table > thead > tr > .table-btn > a{
    margin-top: .5rem;
    margin-bottom: .5rem;
  }
  .title-table{
    margin-left: 21%;
    margin-right: 0;
  }
}
@media screen and (max-width: 219px){
  .navbar-table > .brand > p > .input-field > a, .title-tablinput-field > p{
    font-size: .9em;
  }
  .title-table{
    margin-left: 22.5%;
    margin-right: 0;
  }
}
@media screen and (max-width: 189px){
  .container-table{
    top: 13rem;
  }
}
@media screen and (max-width: 159px){
  .title-table{
    margin-top: 13rem;
  }
  .container-table{
    top: 13.8rem;
  }
}
/* end of responsive */


      .side{
        align-items: center;
      }

      .navbar {
        width: 100%;
      }

      nav {
        height: 100%;
      }

      .profile {
        margin-left: 150px;
      }

      .nav-input {
        transition: 1s;
      }

    }
  </style>
<!--  -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          display: ['group-focus'],
          opacity: ['group-focus'],
          inset: ['group-focus'],
          colors: {
            clifford: '#da373d',
            ungu: '',
            ungu1: '#7B2A8C',
            ungu2: '#3B296F',
            biru: '#5968C3',
            hijau: '#01C94B',
          }
        }
      }
    }
  </script>
</head>
<body class="h-screen mx-auto antialiased flex justify-between bg-purple-100 font-inter" onload="onload()">

    <!-- NAV -->
    <div class="navbar fixed flex justify-between p-5 bg-gradient-to-r from-ungu1 to-ungu2 w-100% mr-0 z-10">
      <div class="text-left font-bold items-center ">
        <a href="">
          <h3 class="text-white ml-14 lg:ml-4 text-lg block">InVentory</h3>
        </a>
        <div>
        </div>
      </div>
      <div class="profile hidden sm:block">
        <a href="profile.html" class="flex"><h3 class="text-white font-semibold pr-3 pt-1">NoFace21</h3> 
        <img src="../../img/noface.jpg" alt="profile" class="w-7 h-7 rounded-full border"></a>
      </div>
      <div class="absolute px-48 box-border lg:mx-[1px] -my-[7px] hidden md:block">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-[13px] ml-3 bi bi-search inline-block text-white absolute" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          <input type="text" name="text" placeholder="Search" class="sm-input placeholder-white text-white items-center bg-opacity-25 max-w-md w-80 lg:w-[1000px] bg-slate-100 rounded-md px-10 h-10 text-xs font-semibold focus:border-ungu1 focus:outline-none " required>
      </div>
    </div>

    <!-- HAMBURGER -->
    <button id="hamburger" class="fixed m-[16px] text-white inline-flex items-center justify-center focus:border h-10 w-10 rounded-md outline-none focus:outline-none lg:hidden z-10">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
    </button>
    <nav id="nav-menu" class="nav-input bg-ungu1 mt-[68px] h-[530px] sm:h-[488px] md:h-[432px] -mr-20 hidden lg:hidden fixed transition duration-1000 rounded-b-md z-50">
      <ul class="w-[350px]">
        <li class="ml-[13px] py-2 md:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-[13px] ml-3 bi bi-search inline-block text-white absolute" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        <input type="text" name="text" placeholder="Search" class="placeholder-white text-white items-center bg-opacity-25 max-w-md w-80 bg-slate-100 rounded-md px-10 h-10 text-xs font-semibold focus:border-ungu1 focus:outline-none " required>
        </li>
        <li>
          <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/dash.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/gudang.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Gudang</span>
          </a>
        </li>
        <li>
          <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/satuan.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Satuan Barang</span>
          </a>
        </li>
        <li>
          <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/data.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Kategori Barang</span>
          </a>
        </li>
        <li>
          <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/checklist.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Pengajuan Barang</span>
          </a>
        </li>
        <li>
          <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/borrow.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Pinjam Barang</span>
          </a>
        </li>
        <li>
          <a href="" class="side -ml-[2px] flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/list.png" alt="" class="w-5 h-5
             ml-7 mr-2">
            <span class="">Laporan Barang</span>
          </a>
        </li>
        <li>
          <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
            <img src="../../img/user.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Profile</span>
          </a>
        </li>
        <li>
          <a href="login.html" class=" side flex text-white py-3 hover:bg-ungu2 hover:rounded-b-md transition duration-200" id="sidebar">
            <img src="../../img/logout.png" alt="" class="w-4 h-4
             ml-7 mr-2">
            <span class="">Log Out</span>
          </a>
        </li>
        <li>
          <div class="sm:hidden block ml-[215px]">
            <a href="profile.html" class="flex"><h3 class="text-white font-semibold pr-3 pt-1">NoFace21</h3> 
            <img src="../../img/noface.jpg" alt="profile" class="w-7 h-7 rounded-full border"></a>
          </div>
        </li>
      </ul>

    </nav>

    <!-- END HAMBURGER -->
    <!-- END NAV -->

    <!-- SIDE -->
    <nav class="relative min-h-screen lg:fixed hidden lg:flex">
      <div class="flex-col bg-ungu1 w-52 mt-[68px]" >
        <ul class="flex-col">
          <li>
            <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/dash.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/gudang.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Gudang</span>
            </a>
          </li>
          <li>
            <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/satuan.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Satuan Barang</span>
            </a>
          </li>
          <li>
            <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/data.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Kategori Barang</span>
            </a>
          </li>
          <li>
            <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/checklist.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Pengajuan Barang</span>
            </a>
          </li>
          <li>
            <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/borrow.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Pinjam Barang</span>
            </a>
          </li>
          <li>
            <a href="" class="side -ml-[2px] flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/list.png" alt="" class="w-5 h-5
               ml-7 mr-2">
              <span class="">Laporan Barang</span>
            </a>
          </li>
          <li>
            <a href="" class="side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/user.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Profile</span>
            </a>
          </li>
          <li>
            <a href="login.html" class="mt-[143px] side flex text-white py-3 hover:bg-ungu2 transition duration-200" id="sidebar">
              <img src="../../img/logout.png" alt="" class="w-4 h-4
               ml-7 mr-2">
              <span class="">Log Out</span>
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <!-- END SIDE -->

    <!-- CONTENT -->

    <!-- header table  -->
    <div class="content">
      <div class="flex-col">
        <!-- navbar table -->
        <div class="navbar-table">
          <div class="brand">
            <p class="font-semibold capitalize">peminjaman barang</p>
          </div>
          <div class="input-field">
            <a href="form-peminjaman.html" class="capitalize font-semibold">tambah peminjaman</a>
          </div>
        </div>
        <!-- end of navbar table -->

        <!-- title table -->
        <div class="title-table W-[500px] p-96">
          <div class="title input-field w-[100%]">
            <p class="font-semibold capitalize text-[1.7em] text-center">data peminjaman barang</p>
          </div>
        </div>
        <!-- end of title table -->
        <!-- end of header table -->

        <!-- tables -->
        <div class="container-table" id="content">
          <table class="table" cellspacing="0" cellpadding="0">
            <thead>
              <tr class="font-semibold">
                <th>no</th>
                <th>nama barang</th>
                <th>jumlah</th>
                <th>tanggal pinjam</th>
                <th>status peminjaman</th>
                <th>aksi</th>
              </tr>
            </thead>
            <tbody id="table-body">
            </tbody>
          </table>
          <div class="table-footer">
              <ul class="pagination pagination-primary">
                <li class="page-item"><a class="page-link" href="<?= $pager->links()?>">Prev</a></li>
                <li class="page-item active"><a class="page-link" href="<?= $pager->links()?>">1</a></li>
                <li class="page-item"><a class="page-link" href="<?= $pager->links()?>">2</a></li>
                <li class="page-item"><a class="page-link" href="<?= $pager->links()?>">3</a></li>
                <li class="page-item"><a class="page-link" href="<?= $pager->links()?>">Next</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- table hidden -->
    <div class="content-hidden">
      <div class="flex-col">

      <!-- header table -->
      <!-- navbar table  -->
      <div class="navbar-table">
        <div class="brand">
          <p class="font-semibold capitalize">peminjaman barang</p>
        </div>
        <div class="input-field">
          <a href="#" class="capitalize font-semibold">tambah peminjaman</a>
        </div>
      </div>
      <!-- end of navbar table  -->

      <!-- title table -->
        <div class="title-table W-[500px] p-96">
          <div class="title input-field">
            <p class="font-semibold capitalize sm:text-[1.6em] text-center">data peminjaman barang</p>
          </div>
        </div>
      <!-- end of title table -->
      <!-- end of header table -->
        <!-- tables -->
        <div class="container-table" id="content">
          <table class="table" cellspacing="0" cellpadding="0">
            <thead id="table-hidden">
              <!-- <tr>
                <th>No</th>
                <td>1</td>
              </tr>
              <tr>
                <th>nama barang</th>
                <td>keybord logitech</td>
              </tr>
              <tr>
                <th>jumlah</th>
                <td>4</td>
              </tr>
              <tr>
                <th>tanggal pinjam</th>
                <td>rp. 03/03/2023</td>
              </tr>
              <tr>
                <th>status peminjaman</th>
                <td>rp. 03/03/2023</td>
              </tr>
              <tr>
                <th>Aksi</th>
                <td class="table-btn">
                  <a href="#" class="sm:mr-[60px] md:mr-0 p-2 px-5 mx-1 rounded-lg text-white text-sm md:text-xs" style="background-color: #00C2FF;">ubah</a>
                  <a href="#" class="p-2 px-5 mx-1 rounded-lg text-white text-sm md:text-xs" style="background-color: #FF5050;">hapus</a>
                </td>
              </tr> -->
            </thead>
          </table>
          <div class="table-footer" id="table-footer">
              <button type="button" name="button" class="prev"><img src="../../img/icons/back.png" alt=""><span>Previous</span></button>
              <input type="text" name="" class="field" value="1" disabled>
              <button type="button" name="button" class="next"><span>Next</span><img src="../../img/icons/next.png" alt="Next"></button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of table hidden -->

    <!-- end of tables -->

    <!-- END CONTENT -->

<script src="../../dist/peminjamanJS/peminjamanHariIni.js"></script>
</body>
</html>
