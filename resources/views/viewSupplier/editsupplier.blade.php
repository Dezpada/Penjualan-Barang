<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
@foreach($supplier as $row)
<form action="" method="post">
{{csrf_field()}}
kode <input type="input" name="id_supplier" required value="{{$row->id_supplier}}"><br>
Kontak Supplier <input type="input" name="kontak_supplier" required value="{{$row->kontak_supplier}}"><br>
Alamat Supplier <input type="input" name="alamat_supplier" required value="{{$row->alamat_supplier}}"><br>
Telp Supplier <input type="input" name="telp_supplier" required value="{{$row->telp_supplier}}"><br>
Keterangan Supplier <input type="input" name="keterangan_supplier" required value="{{$row->keterangan_supplier}}"><br>
Telp Perusahaan <input type="input" name="telp_perusahaan" required value="{{$row->telp_perusahaan}}"><br>
Nama Perusahaan <input type="input" name="nama_perusahaan" required value="{{$row->nama_perusahaan}}"><br>
<input type="submit" value="update">
</form>
@endforeach
</body>
</html>