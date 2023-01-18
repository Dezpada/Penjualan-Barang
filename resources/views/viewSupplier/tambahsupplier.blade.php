<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
@if(count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
<li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
@endif
<br>
<form action="{{ url()->current() }}/simpan" method="post">
{{csrf_field()}}
kode <input type="input" name="id_supplier" value="{{old('id_supplier')}}"><br>
Kontak Supplier <input type="input" name="kontak_supplier" value="{{old('kontak_supplier')}}"><br>
Alamat Supplier <input type="input" name="alamat_supplier" value="{{old('alamat_supplier')}}"><br>
Telp Supplier <input type="input" name="telp_supplier" value="{{old('telp_supplier')}}"><br>
Keterangan Supplier <input type="input" name="keterangan_supplier" value="{{old('keterangan_supplier')}}"><br>
Telp Perusahaan <input type="input" name="telp_perusahaan" value="{{old('telp_perusahaan')}}"><br>
Nama Perusahaan <input type="input" name="nama_perusahaan" value="{{old('nama_perusahaan')}}"><br>
<input type="submit" value="simpan">
</form>
</body>
</html>