<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SupplierModel extends Model
{
public function Readsupplier()
 {
 $supplier=DB::table('supplier')->get();
 return $supplier;
}
public function Simpansupplier($x)
 {
 $supplier=DB::table('supplier')->insert([
 'id_supplier'=>$x->id_supplier,
 'kontak_supplier'=>$x->kontak_supplier,
 'alamat_supplier'=>$x->alamat_supplier,
 'telp_supplier'=>$x->telp_supplier,
 'keterangan_supplier'=>$x->keterangan_supplier,
 'telp_perusahaan'=>$x->telp_perusahaan,
 'nama_perusahaan'=>$x->nama_perusahaan
 ]);
}
public function Hapussupplier($id_supplier)
 {
 $supplier=DB::table('supplier')->
 where('id_supplier',$id_supplier)->delete();
}
public function Editsupplier($id_supplier)
 {
 $supplier=DB::table('supplier')->where('id_supplier',$id_supplier)->get();
 return $supplier;
 }
public function Edittsupplier($x)
 {
 DB::table('supplier')->where('id_supplier',$x->id_supplier)->update([
    'kontak_supplier'=>$x->kontak_supplier,
    'alamat_supplier'=>$x->alamat_supplier,
    'telp_supplier'=>$x->telp_supplier,
    'keterangan_supplier'=>$x->keterangan_supplier,
    'telp_perusahaan'=>$x->telp_perusahaan,
    'nama_perusahaan'=>$x->nama_perusahaan
 ]);
}
public function Carisupplier($cari)
 {
 $supplier=DB::table('supplier')->
where('id_supplier',$cari)->get();
return $supplier;
 }
}
?>
