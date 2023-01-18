<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Order;

class ControllerOrder extends Controller
{
    public function order()
    {
        $orderselect = DB::table('order')->get();
        $orderwhere = DB::table('order')->where('do', 'do1235')->first();
        $orderby = DB::table('order')->orderBy('grandtotal', 'desc')->get();
        $orderinsert = DB::table('order')->insert([
            'kodeorder' => 'o1241',
            'kodesup' => 's001',
            'id' => 2,
            'tanggal' => '2022-12-05',
            'do' => 'do1217',
            'keterangan' => 'Beli Bahan',
            'grandtotal' => 5000000
        ]);
        $orderupdate = DB::table('order')->where('kodeorder', 'o1241')->update(['grandtotal' => 400000]);
        $orderdelete = DB::table('order')->where('kodeorder', '=', 'o1241')->delete();
        $orderjoin = DB::table('order')
            ->join('order_item', 'order_item.kodeorder', '=', 'order.kodeorder')
            ->join('barang', 'order_item.kodebrg', '=', 'barang.kodebrg')
            ->select('order.*', 'barang.namabrg')
            ->get();

        return compact('orderselect', 'orderwhere', 'orderby', 'orderinsert', 'orderupdate', 'orderdelete', 'orderjoin');
    }

    public function order1()
    {
        $eloselect = Order::select('*')->get();
        $elowhere = Order::where('do', 'do1234')->get();
        $eloby = Order::orderBy('kodeorder', 'desc')->get();
        $eloinsert = Order::insert([
            'kodeorder' => 'o1241',
            'kodesup' => 's001',
            'id' => 2,
            'tanggal' => '2022-12-05',
            'do' => 'do1217',
            'keterangan' => 'Beli Bahan',
            'grandtotal' => 5000000
        ]);
        $eloupdate = Order::where('kodeorder', 'o1241')->update(['grandtotal' => 400000]);
        $elodelete = Order::where('kodeorder', '=', 'o1241')->delete();
        $elojoin = Order::join('order_item', 'order_item.kodeorder', '=', 'order.kodeorder')
            ->join('barang', 'order_item.kodebrg', '=', 'barang.kodebrg')
            ->select('order.*', 'barang.namabrg')
            ->get();

        return compact('eloselect', 'elowhere', 'eloby', 'eloinsert','eloupdate' ,'elodelete','elojoin');
    }

}