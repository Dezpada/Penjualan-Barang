<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GudangModel extends Model
{
    public $timestamps = false;
    protected $table = 'mastergudang';
    
    public function Readgudang($tanggalAwal, $tanggalAkhir)
    {
        $result = array();
        $gudang = DB::table('mastergudang')
                    ->when($tanggalAwal, function($query, $tanggalAwal){
                        return $query
                            ->where('tanggal','>=', $tanggalAwal);
                    })
                    ->when($tanggalAkhir, function($query, $tanggalAkhir){
                        return $query
                            ->where('tanggal','<=', $tanggalAkhir);
                    })
                    ->get();

        foreach ($gudang as $data) {
            $barang = DB::table('detailgudang')
                        ->leftJoin('barang', 'detailgudang.kodebrg', '=', 'barang.kodebrg')
                        ->select('barang.kodebrg', 'barang.namabrg', 'barang.satuan', 'detailgudang.harga', 'detailgudang.jumlah')
                        ->where('detailgudang.kodetr', $data->kodetr)
                        ->get();
            
            array_push($result, array(
                'kodetr' => $data->kodetr,
                'tanggal' => $data->tanggal,
                'namasup' => $data->namasup,
                'telp' => $data->telp,
                'alamat' => $data->alamat,
                'keterangan' => $data->keterangan,
                'grandtotal' => $data->grandtotal,
                'barang' => json_decode(json_encode($barang))
            ));
        }
        return json_decode(json_encode($result));
    }

    public function SimpanMasterGudang($kodetr,$tanggal,$namasup,
    $telp,$alamat,$keterangan,$grandtotal)
    {
        DB::table('mastergudang')->insert([
            'kodetr'=>$kodetr, 
            'tanggal'=>$tanggal,
            'namasup'=>$namasup,
            'telp'=>$telp, 
            'alamat'=>$alamat,
            'keterangan'=>$keterangan, 
            'grandtotal'=>$grandtotal 
        ]);         
    
    }

    public function SimpanDetailGudang($kodetr,$kodebrg,$harga,$jumlah)
    {
        DB::table('detailgudang')->insert([
            'kodetr'=>$kodetr, 
            'kodebrg'=>$kodebrg,
            'harga'=>$harga,
            'jumlah'=>$jumlah
            
        ]);         
    
    }
    public function readWhereDb($from, $where, $id) {
        $data = DB::table($from)->where($where, $id)->get();
        return $data;
    }
    
}
