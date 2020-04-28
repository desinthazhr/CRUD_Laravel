<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Database Mahasiswa</h1>
    <button><a href="/statistika">kembali</a></button>
    <h3>Tambah Data Mahasiswa Statistika</h3>
<form action="/statistika/tambahDatastat" method="post">
    <table cellpadding="10">
        {{ csrf_field() }}
        <tr>
            <td><label for="No_Ujian">No Ujian : </label></td>
            <td><input type="text" name="No_Ujian" id="No_Ujian" required></td>
        </tr>
        <tr>
            <td><label for="Nama">Nama : </label></td>
            <td><input type="text" name="Nama" id="Nama" required></td>
        </tr>
        <tr>
            <td><label for="Kelamin">Jenis Kelamin : </label></td>
            <td><input type="text" name="Kelamin" id="Kelamin" required></td>
        </tr>
        <tr>
            <td><label for="Jenjang">Jenjang : </label></td>
            <td><input type="text" name="Jenjang" id="Jenjang" required></td>
        </tr>
        <tr>
            <td><label for="Fakultas">Fakultas : </label></td>
            <td><input type="text" name="Fakultas" id="Fakultas" required></td>
        </tr>
        <tr>
            <td><label for="Prodi">Prodi : </label></td>
            <td><input type="text" name="Prodi" id="Prodi" required></td>
        </tr>
        <tr>
            <td><label for="Jalur_Masuk">Jalur : </label></td>
            <td><input type="text" name="Jalur_Masuk" id="Jalur_Masuk" required></td>
        </tr>
    </table><p></p>
    <input type="submit" value="Simpan data">
</form>
</body>
</html>