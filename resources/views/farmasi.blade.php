@extends('layout/main')

@section('title', 'Database Farmasi')

@section('konten')
    <h3><u>Database Farmasi</u></h3>
    <a href="farmasi/tambahfar">Tambah data</a>
    <table border="1" cellspacing="0">
        <tr>
            <th>No Ujian</th>
            <th>Nama</th>
            <th>kelamin</th>
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
                <td><a href="/farmasi/ubahfar/{{ $d -> No_Ujian }}">ubah</a>
                <a href="/farmasi/hapusfar/{{ $d -> No_Ujian }}">hapus</a></<a>
            </tr>
        @endforeach
    </table>
    Halaman : {{ $data -> currentPage() }} <br>
    Jumlah Data : {{ $data -> total() }} <br>
    Data Perhalaman : {{ $data -> perPage() }} <br><br>
    {{ $data -> links() }}
@endsection