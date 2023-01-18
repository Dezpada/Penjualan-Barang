<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBarang;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerKaryawan;
use App\Http\Controllers\ControllerSupplier;
use App\Http\Controllers\ControllerPenjualan;
use App\Http\Controllers\ControllerGudang;
use App\Http\Controllers\ControllerOrder;

Route::get('order', [ControllerOrder::class, 'order']);
Route::get('order1', [ControllerOrder::class, 'order1']);
Route::get('orderitem', [ControllerOrder::class, 'orderitem']);

Route::get('barang', [ControllerBarang::class, 'readbarang']);
Route::get('barang/tambah', [ControllerBarang::class, 'tambahbarang']);
Route::post('barang/simpan', [ControllerBarang::class, 'simpanbarang']);
Route::get('barang/hapus/{kodebrg}', [ControllerBarang::class, 'hapusbarang']);
Route::get('barang/edit/{kodebrg}', [ControllerBarang::class, 'editbarang']);
Route::post('barang/editt', [ControllerBarang::class, 'edittbarang']);

Route::get('karyawan', [ControllerKaryawan::class, 'readkaryawan']);
Route::get('karyawan/tambah', [ControllerKaryawan::class, 'tambahkaryawan']);
Route::post('karyawan/simpan', [ControllerKaryawan::class, 'simpankaryawan']);
Route::get('karyawan/hapus/{kodebrg}', [ControllerKaryawan::class, 'hapuskaryawan']);
Route::get('karyawan/edit/{kodebrg}', [ControllerKaryawan::class, 'editkaryawan']);
Route::post('karyawan/editt', [ControllerKaryawan::class, 'edittkaryawan']);

Route::get('supplier', [ControllerSupplier::class, 'readsupplier']);
Route::get('supplier/tambah', [ControllerSupplier::class, 'tambahsupplier']);
Route::post('supplier/simpan', [ControllerSupplier::class, 'simpansupplier']);
Route::get('supplier/hapus/{kodebrg}', [ControllerSupplier::class, 'hapussupplier']);
Route::get('supplier/edit/{kodebrg}', [ControllerSupplier::class, 'editsupplier']);
Route::post('supplier/editt', [ControllerSupplier::class, 'edittsupplier']);

Route::get('login', [ControllerLogin::class, 'login']);
Route::post('actionlogin', [ControllerLogin::class, 'actionlogin']);
Route::get('registrasi', [ControllerLogin::class, 'registrasi']);
Route::post('postregistrasi', [ControllerLogin::class, 'postregistrasi']);

Route::get('gudang', [ControllerGudang::class, 'readgudang']);
Route::post('gudang', [ControllerGudang::class, 'readgudang']);//->middleware(['auth','checkRole:admin,gudang']);
Route::get('gudang/tambah', [ControllerGudang::class, 'tambahgudang']);
Route::get('gudang/getdetailgudang/{id}', [ControllerGudang::class, 'getdetail']);
Route::get('gudangmaster/{kodetr}/{tanggal}/{namasup}/{telp}/{alamat}/{keterangan}/{grandtotal}',
[ControllerGudang::class,'gudangmaster']);

Route::get('gudangdetail/{kodetr}/{kodebrg}/{harga}/{jumlah}',
[ControllerGudang::class,'gudangdetail']);

Route::get(
    'datapenjualan',
    [ControllerPenjualan::class, 'datapenjualan']
)
    ->middleware('checkRole:admin,operator');
Route::get(
    'datagudang',
    [ControllerGudang::class, 'datagudang']
)
    ->middleware('checkRole:admin,gudang');