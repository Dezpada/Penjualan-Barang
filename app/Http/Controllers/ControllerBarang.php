<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\AnggotaModel;

class ControllerBarang extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function readbarang()
    {
        $xx = new AnggotaModel();
        $barang = $xx->Readbarang();
        return view('viewBarang/databarang', ['barang' => $barang]);
    }

    public function tambahbarang()
    {
        return view('viewBarang/tambahbarang');
    }

    public function simpanbarang(Request $x)
    {
        $xx = new AnggotaModel();
        $xx->Simpanbarang($x);
        return redirect('/barang');
    }
    public function hapusbarang($kodebrg)
    {
        $xx = new AnggotaModel();
        $xx->Hapusbarang($kodebrg);
        return redirect('/barang');
    }
    public function editbarang($kodebrg)
    {
        $xx = new AnggotaModel();
        $barang = $xx->Editbarang($kodebrg);
        return view('viewBarang/editbarang', ['barang' => $barang]);
    }

    public function edittbarang(Request $x)
    {
        $xx = new AnggotaModel();
        $xx->Edittbarang($x);
        return redirect('/barang');
    }

    public function caribarang($cari)
    {
        $xx = new AnggotaModel();
        $barang = $xx->Caribarang($cari);
        return view('viewBarang/databarang', ['barang' => $barang]);

    }

}