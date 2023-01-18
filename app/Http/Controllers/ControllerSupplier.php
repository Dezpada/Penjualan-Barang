<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\SupplierModel;
class ControllerSupplier extends BaseController
{

 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function readsupplier()
 {
 $xx=new SupplierModel();
$supplier=$xx->Readsupplier();
return view('viewSupplier/datasupplier',['supplier'=>$supplier]);
 } 

 public function tambahsupplier()
{
return view('viewSupplier/tambahsupplier');
 }

 public function simpansupplier(Request $x)
 {
 $xx=new SupplierModel();
 $xx->Simpansupplier($x);
 return redirect('/supplier');
 }
 public function hapussupplier($id_supplier)
 {
 $xx=new SupplierModel();
 $xx->Hapussupplier($id_supplier);
return redirect('/supplier');
}
 public function editsupplier($id_supplier)
 {
 $xx=new SupplierModel();
 $supplier=$xx->Editsupplier($id_supplier);
return view('viewSupplier/editsupplier',['supplier'=>$supplier]);
}

 public function edittsupplier(Request $x)
 {
 $xx=new SupplierModel();
 $xx->Edittsupplier($x);
return redirect('/supplier');
}

 public function carisupplier($cari)
 {
$xx=new SupplierModel();
$supplier=$xx->Carisupplier($cari);
 return view('viewSupplier/datasupplier',['supplier'=>$supplier]);

 }

}