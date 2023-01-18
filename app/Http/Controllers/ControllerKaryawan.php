<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\KaryawanModel;
class ControllerKaryawan extends BaseController
{
 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function readkaryawan()
 {
 $xx=new KaryawanModel();
$karyawan=$xx->Readkaryawan();
return view('viewKaryawan/datakaryawan',['karyawan'=>$karyawan]);
 } 
 public function tambahkaryawan()
{
return view('viewKaryawan/tambahkaryawan');
 }

 public function simpankaryawan(Request $x)
 {
 $xx=new KaryawanModel();
 $xx->Simpankaryawan($x);
 return redirect('/karyawan');
 }
 public function hapuskaryawan($id_karyawan)
 {
 $xx=new KaryawanModel();
 $xx->Hapuskaryawan($id_karyawan);
return redirect('/karyawan');
}
 public function editkaryawan($id_karyawan)
 {
 $xx=new KaryawanModel();
 $karyawan=$xx->Editkaryawan($id_karyawan);
return view('viewKaryawan/editkaryawan',['karyawan'=>$karyawan]);
}

 public function edittkaryawan(Request $x)
 {
 $xx=new KaryawanModel();
 $xx->Edittkaryawan($x);
return redirect('/karyawan');
}

 public function carikaryawan($cari)
 {
$xx=new KaryawanModel();
$karyawan=$xx->Carikaryawan($cari);
 return view('viewKaryawan/datakaryawan',['karyawan'=>$karyawan]);
 } 

}