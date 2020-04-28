@extends('layout/main')

@section('title', 'Database Statistika')

@section('konten')
    <h3><u>Database Statistika</u></h3>
    <a href="statistika/tambahstat">Tambah data</a>
    <table border="1" cellspacing="0">
        <tr>
            <th>No Ujian</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Jenjang</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Jalur Masuk</th>
            <th>Aksi</th> 
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d -> No_Ujian }}</td>
                <td>{{ $d -> Nama }}</td>
                <td>{{ $d -> Kelamin }}</td>
                <td>{{ $d -> Jenjang }}</td>
                <td>{{ $d -> Fakultas }}</td>
                <td>{{ $d -> Prodi }}</td>
                <td>{{ $d -> Jalur_Masuk }}</td>
                <td><a href="/statistika/ubahstat/{{ $d -> No_Ujian }}">ubah</a>
                <a href="/statistika/hapusstat/{{ $d -> No_Ujian }}">hapus</a></<a>
            </tr>
        @endforeach
    </table>
    Halaman : {{ $data -> currentPage() }} <br>
    Jumlah Data : {{ $data -> total() }} <br>
    Data Perhalaman : {{ $data -> perPage() }} <br><br>
    {{ $data -> links() }}
@endsection
