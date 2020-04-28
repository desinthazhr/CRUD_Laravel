<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Database Mahasiswa</h1>
    <button><a href="/informatika"> Kembali</a></button>
    <h3>Ubah Data Mahasiswa Informatika</h3>
    @foreach ($data as $d)
        <form action="/informatika/ubahDatainf" method="post">
            <table cellpadding="10">
                {{ csrf_field() }}
                <tr>
                    <input type="hidden" name="no_ujian" value="{{ $d->No_Ujian }}">
                </tr>
                <tr>
                    <td><label for="Nama">Nama : </label></td>
                    <td><input type="text" required="required" name="Nama" id="Nama" value="{{ $d->Nama }}"></td>
                </tr>
                <tr>
                    <td><label for="Kelamin">Jenis Kelamin : </label></td>
                    <td><input type="text" required="required" name="Kelamin" id="Kelamin" value="{{ $d->Kelamin }}"></td>
                </tr>
                <tr>
                    <td><label for="Jenjang">Jenjang : </label></td>
                    <td><input type="text" required="required" name="Jenjang" id="Jenjang" value="{{ $d->Jenjang }}"></td>
                </tr>
                <tr>
                    <td><label for="Fakultas">Fakultas : </label></td>
                    <td><input type="text" required="required" name="Fakultas" id="Fakultas" value="{{ $d->Fakultas }}"></td>
                </tr>
                <tr>
                    <td><label for="Prodi">Prodi : </label></td>
                    <td><input type="text" required="required" name="Prodi" id="Prodi" value="{{ $d->Prodi }}"></td>
                </tr>
                <tr>
                    <td><label for="Jalur_Masuk">Jalur : </label></td>
                    <td><input type="text" required="required" name="Jalur_Masuk" id="Jalur_Masuk" value="{{ $d->Jalur_Masuk }}"></td>
                </tr>
            </table><p></p>
            <input type="submit" value="Simpan data">
        </form>
    @endforeach
</body>
</html>
