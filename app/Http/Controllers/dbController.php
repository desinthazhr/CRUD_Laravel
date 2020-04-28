<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbController extends Controller
{
    //informatika
    public function data(){
        //mengambil data dari table informatika
        $data = DB::table('tabel_informatika') -> paginate(20);
        return view('informatika', ['data' => $data]);
    }

    //methode unntuk menampilkan view form tambah inf
    public function tambah(){
        //memanggil view tambah
        return view('tambah');
    }
    
    public function tambahDatainf(Request $request) {
        DB::table('tabel_informatika') -> insert([
            'No_Ujian' => $request -> No_Ujian,
            'Nama' => $request -> Nama,
            'Kelamin' => $request -> Kelamin,
            'Jenjang' => $request -> Jenjang,
            'Fakultas' => $request -> Fakultas,
            'Prodi' => $request -> Prodi,
            'Jalur_Masuk' => $request -> Jalur_Masuk
        ]);
        return redirect('/informatika');
    }

    public function ubah($no_ujian) {
        $data = DB::table('tabel_informatika') -> where('No_Ujian', $no_ujian) -> get();
        return view('ubah', ['data' => $data]);
    }
    
    public function ubahDatainf(Request $request) {
        DB::table('tabel_informatika') -> where('No_Ujian', $request->no_ujian) -> update([
            'Nama' => $request -> Nama,
            'Kelamin' => $request -> Kelamin,
            'Jenjang' => $request -> Jenjang,
            'Fakultas' => $request -> Fakultas,
            'Prodi' => $request -> Prodi,
            'Jalur_Masuk' => $request -> Jalur_Masuk
        ]);
        return redirect('/informatika');
    }

    public function hapus($no_ujian)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tabel_informatika')->where('No_Ujian', $no_ujian) ->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/informatika');
    }

    //statistika
    public function datastat(){
        $data = DB::table('tabel_statistika') -> paginate(20);
        return view('statistika', ['data' => $data]);
    }
    public function tambahstat(){
        return view('tambahstat');
    }
    public function tambahDatastat(Request $request) {
        DB::table('tabel_statistika') -> insert([
            'No_Ujian' => $request -> No_Ujian,
            'Nama' => $request -> Nama,
            'Kelamin' => $request -> Kelamin,
            'Jenjang' => $request -> Jenjang,
            'Fakultas' => $request -> Fakultas,
            'Prodi' => $request -> Prodi,
            'Jalur_Masuk' => $request -> Jalur_Masuk
        ]);
        return redirect('/statistika');
    }

    public function ubahstat($no_ujian) {
        $data = DB::table('tabel_statistika') -> where('No_Ujian', $no_ujian) -> get();
        return view('ubahstat', ['data' => $data]);
    }
    
    public function ubahDatastat(Request $request) {
        DB::table('tabel_statistika') -> where('No_Ujian', $request->no_ujian) -> update([
            'Nama' => $request -> Nama,
            'Kelamin' => $request -> Kelamin,
            'Jenjang' => $request -> Jenjang,
            'Fakultas' => $request -> Fakultas,
            'Prodi' => $request -> Prodi,
            'Jalur_Masuk' => $request -> Jalur_Masuk
        ]);
        return redirect('/statistika');
    }

    public function hapusstat($no_ujian)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tabel_statistika')->where('No_Ujian',$no_ujian) ->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/statistika');
    }

    //farmasi
    public function datafar(){
        $data = DB::table('tabel_farmasi') -> paginate(20);
        return view('farmasi', ['data' => $data]);
    }
    
    public function tambahfar(){
        return view('tambahfar');
    }

    public function tambahDatafar(Request $request) {
        DB::table('tabel_farmasi') -> insert([
            'No_Ujian' => $request -> No_Ujian,
            'Nama' => $request -> Nama,
            'Kelamin' => $request -> Kelamin,
            'Jenjang' => $request -> Jenjang,
            'Fakultas' => $request -> Fakultas,
            'Prodi' => $request -> Prodi,
            'Jalur_Masuk' => $request -> Jalur_Masuk
        ]);
        return redirect('/farmasi');
    }
    public function ubahfar($no_ujian) {
        $data = DB::table('tabel_farmasi') -> where('No_Ujian', $no_ujian) -> get();
        return view('ubahfar', ['data' => $data]);
    }
    
    public function ubahDatafar(Request $request) {
        DB::table('tabel_farmasi') -> where('No_Ujian', $request->no_ujian) -> update([
            'Nama' => $request -> Nama,
            'Kelamin' => $request -> Kelamin,
            'Jenjang' => $request -> Jenjang,
            'Fakultas' => $request -> Fakultas,
            'Prodi' => $request -> Prodi,
            'Jalur_Masuk' => $request -> Jalur_Masuk
        ]);
        return redirect('/farmasi');
    }

    public function hapusfar($no_ujian)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tabel_farmasi')->where('No_Ujian',$no_ujian) ->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/farmasi');
    }
    
    
 
}