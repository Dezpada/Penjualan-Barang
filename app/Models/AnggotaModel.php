<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnggotaModel extends Model
{
    public function Readbarang()
    {
        $barang = DB::table('barang')->get();
        return $barang;
    }
    public function Simpanbarang($x)
    {
        $barang = DB::table('barang')->insert([
            'kodebrg' => $x->kodebrg,
            'namabrg' => $x->namabrg,
            'satuan' => $x->satuan,
            'hargabeli' => $x->hargabeli,
            'hargajual' => $x->hargajual
        ]);
    }
    public function Hapusbarang($kodebrg)
    {
        $barang = DB::table('barang')->where('kodebrg', $kodebrg)->delete();
    }
    public function Editbarang($kodebrg)
    {
        $barang = DB::table('barang')->where('kodebrg', $kodebrg)->get();
        return $barang;
    }
    public function Edittbarang($x)
    {
        DB::table('barang')->where('kodebrg', $x->kodebrg)->update([
            'namabrg' => $x->namabrg,
            'satuan' => $x->satuan,
            'hargabeli' => $x->hargabeli,
            'hargajual' => $x->hargajual
        ]);
    }
    public function Caribarang($cari)
    {
        $barang = DB::table('barang')->where('kodebrg', $cari)->get();
        return $barang;
    }
}
