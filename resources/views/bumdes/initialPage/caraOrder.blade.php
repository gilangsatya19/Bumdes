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
        <link rel="stylesheet" href="style.css">
        <title>Order page</title>
    </head>

    <style>
            @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,500,700');
        body{
            margin:0;
            padding:0;
            display:flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
            font-family:'Ubuntu', sans-serif;
        }
        .listbox h3{
            position: relative;
            width: 1008px;
            height: 196px;
            left: 170px;
            top: 100px;
            font-weight: 500;
            font-size: 20px;
            line-height: 33px;
            text-align: center;
            letter-spacing: -0.0011em;
            color: #303C54;
        }

        .listbox h1{
            position: relative;
            width: 470px;
            height: 99px;
            left: 439px;
            top: 1200px;
            font-size: 30px;
            line-height: 40px;
            text-align: center;
            text-transform: capitalize;
            letter-spacing: -0.0011em;
            color: #000000;
        }
        .container
        {
            width: 1200px;
            height: auto;
            margin: 0 auto;
            display: grid;
            grid-template-columns:repeat(auto-fit, minmax(350px, 1fr));
            grid-gap: 10px;
            padding: 10px;
            box-sizing: border-box;    
        }
        .container .box
        {
            position: relative;
            background: #D9D9D9;
            padding: 20px 40px 10px;
            text-align: center;
            overflow: hidden;
            border-radius: 20px;
        }

        .container .box h2
        {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 50px;
            color: #000;
        }
    </style>

    <body>

        <div class="container" >
            <div class="box">
                <h2>01</h2>
                <P>Hubungi di kontak yang tersedia untuk pengisian form order</P>
            </div>
            <div class="box">
                <h2>02</h2>
                <P>Surat kerjasama akan dikirimkan segera setelah form terisi</P>
            </div>
            <div class="box">
                <h2>03</h2>
                <P>Lakukan pembayaran sesuai dengan invoide yang diberkan</P>
            </div>
            <div class="box">
                <h2>04</h2>
                <P>Kirim bukti pembayaran ke kontak yang tersedia untuk proses verifikasi</P>
            </div>
            <div class="box">
                <h2>05</h2>
                <P>aplikasi dapat digunakan 1x24 jam setelah proses verifikasi selesai</P>
            </div>
        </div>
    </body>
    </html>
@endsection