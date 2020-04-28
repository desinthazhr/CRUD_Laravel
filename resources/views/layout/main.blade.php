<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <style type="text/css">
            top: 50%s;
            width: 400px;
            backgroung: black;
        h1{
            text-align: center;
        }
        .btn{
            background-color: maroon; 
            border-radius: 10px;
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: auto;
        .:hover{
        background-color: transparent;
    }
    </style>
        <h1 text-color="grey">Database Mahasiswa</h1>
        <a href="/" class='btn center-block'>Home</a></button>
        <a href="informatika" class='btn'>Informatika</a>
        <a href="farmasi" class='btn'>Farmasi</a>
        <a href="statistika" class='btn'>Statistika</a>
        

@yield('konten')
<footer>
    <p align="center">Copyright @ pemrograman berbasis web 2020</p>
</footer>
    </body>
    </html>