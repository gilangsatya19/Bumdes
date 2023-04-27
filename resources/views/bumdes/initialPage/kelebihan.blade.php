<!-- resources/views/child.blade.php -->
@extends('layouts.main')
 
@section('title', 'SIABDES')
 
@section('sidebar')
    @parent
 
@endsection
 
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelebihan SIABDes</title>
    <link rel="stylesheet" href="kelebihanpage.css"> <!--link hubung css-->
</head>

<style>
    /*Bagian dibawah ini pengaturan navigasi horizontal yang diatas*/
*,
html,
body{ 
    margin: 0;
    padding: 0;
    font-family: "Inter";
}

/*.judul{
    width: 1008px;
    height: 196px;
    position: absolute;
    left: 42px;
    top: 250px;
    line-height: 68px;
    font-family: 'Open Sans';
    /*font-style: normal;
    font-weight: 800;
    font-size: 27px;
    line-height: 68px;
    letter-spacing: -0.0011em;
} Tidak terpakai*/

/*.subjudul{
position: absolute;
width: 704px;
height: 99px;
left: 319px;
top: 793px;
font-family: 'Open Sans';
font-style: normal;
font-weight: 600;
font-size: 24px;
line-height: 33px;
text-align: center;
letter-spacing: -0.0011em;
color: #000000;
} Tidak Terpakai*/

.fcontainer{
    display: flex;
    /*justify-content: center;
    align-items: center;*/
    width: 100%;
    height: 200vh;
    background-color: #ffffff;
}

.wrapper{
    display: flex;
    position: fixed;
    top: 0;
    z-index: 1;
    overflow: hidden;
    justify-content: space-between;
    align-items: center;
    font-size: 20px;
    padding: 15px;
    width: 100%;
    height: 55px;
    background-color: #303c54;
    box-shadow: 0 7px 15px 0 rgba(0, 0, 0.5);
}

.brand{
    display: flex;
    flex-direction: row;
    font-size: 1.5em;
    padding: 15px;
    text-transform: capitalize;
}

.firstname{
    color: white;
    font-weight: 700;
    font-size: 48px;
}

.lastname{
    color: #FFA500;
    font-weight: 400;
    font-size: 48px;
}

.navigation{
    display: flex;
    justify-content: center;
    justify-items: center;
    align-items: center;
}

.navigation>li {
    list-style-type: none;
    padding: 15px;
}

.navigation>li>a{
    color:white;
    font-size: 20px;
    text-decoration: none;
    text-transform: capitalize;
}

.navigation>li>a:hover{
    color: #FFA500;
    transition: all .3s ease-in-out;
}

.navigation .button{
color: #303C54;
background-color: #D9D9D9;
padding: 10px;
border-radius: 7px;
cursor: pointer;
font-size: 15px;
width: 90px;
height: 37px;
text-align: center;
font-family: "open-sans";
}

.button:hover{
    color: #FFA500 !important;
}

/*Bagian bawah ini untuk mengatur Judul text nya*/
.listbox h3{
    position: absolute;
    width: 1008px;
    height: 196px;
    left: 170px;
    top: 180px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 33px;
    text-align: center;
    letter-spacing: -0.0011em;
    color: #000000;
}

.listbox h1{
    position: absolute;
    width: 470px;
    height: 99px;
    left: 439px;
    top: 230px;
    font-family: 'Open Sans';
    font-weight: bold;
    font-size: 40px;
    line-height: 60px;
    text-align: center;
    text-transform: capitalize;
    letter-spacing: -0.0011em;
    color: #000000;
}

/*Bagian bawah ini untuk mengatur kotak beserta text nya*/
.listbox1{
    display: flex;
    position: absolute;
    background: #D9D9D9;
    color: #303C54;
    width: 303px;
    height: 167px;
    padding: 15px 10px;
    left: 65px;
    top: 490px;
    border-radius: 20px;
    text-align: center;
    align-items: center;
}

.listbox2{
    display: flex;
    position: absolute;
    background: #D9D9D9;
    color: #303C54;
    width: 303px;
    height: 167px;
    padding: 15px 10px;
    left: 520px;
    top: 490px;
    border-radius: 20px;
    justify-content: center;
    align-items: center;
}

.listbox3{
    display: flex;
    position: absolute;
    background: #D9D9D9;
    color: #303C54;
    width: 303px;
    height: 167px;
    padding: 15px 10px;
    left: 975px;
    top: 490px;
    border-radius: 20px;
    text-align: center;
    align-items: center;
}

.listbox4{
    display: flex;
    position: absolute;
    background: #D9D9D9;
    color: #303C54;
    width: 303px;
    height: 167px;
    padding: 15px 10px;
    left: 300px;
    top: 850px;
    border-radius: 20px;
    justify-content: center;
    align-items: center;
}

.listbox5{
    display: flex;
    position: absolute;
    background: #D9D9D9;
    color: #303C54;
    width: 303px;
    height: 167px;
    padding: 15px 10px;
    left: 800px;
    top: 850px;
    border-radius: 20px;
    text-align: center;
    align-items: center;
}

/*Bagian bawah ini merupakan pengaturan penomoran kotak*/
.nobox1{
    position: absolute;
    width: 124px;
    height: 64px;
    left: 172px;
    top: 460px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 800;
    font-size: 40px;
    line-height: 54px;
    text-align: center;
    letter-spacing: -0.0011em;
    color: #000000;
}

.nobox2{
    position: absolute;
    width: 124px;
    height: 64px;
    left: 622px;
    top: 460px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 800;
    font-size: 40px;
    line-height: 54px;
    text-align: center;
    letter-spacing: -0.0011em;
    color: #000000;
}

.nobox3{
    position: absolute;
    width: 124px;
    height: 64px;
    left: 1075px;
    top: 460px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 800;
    font-size: 40px;
    line-height: 54px;
    text-align: center;
    letter-spacing: -0.0011em;
    color: #000000;
}

.nobox4{
    position: absolute;
    width: 124px;
    height: 64px;
    left: 407px;
    top: 820px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 800;
    font-size: 40px;
    line-height: 54px;
    text-align: center;
    letter-spacing: -0.0011em;
    color: #000000;
}

.nobox5{
    position: absolute;
    width: 124px;
    height: 64px;
    left: 904px;
    top: 820px;
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 800;
    font-size: 40px;
    line-height: 54px;
    text-align: center;
    letter-spacing: -0.0011em;
    color: #000000;
}
</style>

<body>
    <body>
        <div class="fcontainer">
            <div class="listbox"> <!--Bagian isi kotak-->
                <h3>Kelebihan SIAB-DES</h3>
                <h1>Apa Keunikan dari SIAB-DES?</h1>
            </div>
            <div class="listbox1">
                <h2>Berbasis SAK EMKM & Terintegrasi</h2>
            </div>
            <div class="listbox2">
                <h2>Personal Asistant</h2>
            </div>
            <div class="listbox3">
                <h2>Digitalisasi Penyusunan Laporan Keuangan</h2>
            </div>
            <div class="listbox4">
                <h2>Fitur Formulir Lengkap</h2>
                <p>Formulir Permintaan Kas, Formulir Purchase Order, Formulir Pengiriman Barang, Invoice Penjualan Tunai, dan Invoice Penjualan Kredit</p>
            </div>
            <div class="listbox5">
                <h2>Waktu Penyusunan Efektif dan Efisien</h2>
            </div>

            <div class="nobox1"> <!--Bagian isi penomoran kotak-->
                <h1>01</h1>
            </div>
            <div class="nobox2">
                <h1>02</h1>
            </div>
            <div class="nobox3">
                <h1>03</h1>
            </div>
            <div class="nobox4">
                <h1>04</h1>
            </div>
            <div class="nobox5">
                <h1>05</h1>
            </div>
        </div>
</body>
</html>
@endsection