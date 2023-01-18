<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaryawanModel extends Model
{
    public function Readkaryawan()
    {
        $karyawan = DB::table('karyawan')->get();
        return $karyawan;
    }
    public function Simpankaryawan($x)
    {
        $karyawan = DB::table('karyawan')->insert([
            'id_karyawan' => $x->id_karyawan,
            'nama_karyawan' => $x->nama_karyawan,
            'alamat_karyawan' => $x->alamat_karyawan,
            'telp_karyawan' => $x->telp_karyawan,
            'jeniskel_karyawan' => $x->jeniskel_karyawan,
            'jabatan_karyawan' => $x->jabatan_karyawan,
            'email_karyawan' => $x->email_karyawan,
            'pass_karyawan' => $x->pass_karyawan
        ]);
    }
    public function Hapuskaryawan($id_karyawan)
    {
        $karyawan = DB::table('karyawan')->where('id_karyawan', $id_karyawan)->delete();
    }
    public function Editkaryawan($id_karyawan)
    {
        $karyawan = DB::table('karyawan')->where('id_karyawan', $id_karyawan)->get();
        return $karyawan;
    }
    public function Edittkaryawan($x)
    {
        DB::table('karyawan')->where('id_karyawan', $x->id_karyawan)->update([
            'nama_karyawan' => $x->nama_karyawan,
            'alamat_karyawan' => $x->alamat_karyawan,
            'telp_karyawan' => $x->telp_karyawan,
            'jeniskel_karyawan' => $x->jeniskel_karyawan,
            'jabatan_karyawan' => $x->jabatan_karyawan,
            'email_karyawan' => $x->email_karyawan,
            'pass_karyawan' => $x->pass_karyawan
        ]);
    }
    public function Carikaryawan($cari)
    {
        $karyawan = DB::table('karyawan')->where('id_karyawan', $cari)->get();
        return $karyawan;
    }
}
