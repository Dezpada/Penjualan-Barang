<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class ControllerPenjualan extends BaseController
{
 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 public function datapenjualan()
 {
 echo "Penjualan";
 }
}