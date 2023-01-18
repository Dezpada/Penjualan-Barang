<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\GudangModel;

class ControllerGudang extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function readgudang(Request $request){

        $tanggalAwal = $request->get('tanggalawal');
        $tanggalAkhir = $request->get('tanggalakhir');

        $xx = new GudangModel();
        $gudang = $xx->Readgudang($tanggalAwal, $tanggalAkhir);
        return view('viewGudang.datagudang')
            ->with([
                'gudang' => $gudang,
                'tanggalawal' => $tanggalAwal,
                'tanggalakhir' => $tanggalAkhir,
            ]);
        // return view("gudang.datagudang");
    }

    public function tambahgudang()
    {
        return view('viewGudang.tambahgudang');
    }

    public function gudangmaster($kodetr, $tanggal,$namasup,$telp,$alamat,$keterangan,$grandtotal)
    {
        $xx = new GudangModel();
        $xx->SimpanMasterGudang($kodetr, $tanggal,$namasup,$telp,$alamat,$keterangan,$grandtotal);
    }
    public function gudangdetail($kodetr, $kodebrg, $harga, $jumlah)
    {
        $xx = new GudangModel();
        $xx->SimpanDetailGudang($kodetr, $kodebrg, $harga, $jumlah);
    }

    // public function getdetail($id) {
    //     $db = new GudangModel();
    //     $res = $db->readWhereDb('detailgudang', 'kodetr', $id);
    //     return response()->json(['obj'=>$res]);
    // }
}
