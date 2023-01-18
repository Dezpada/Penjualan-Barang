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
kode <input type="input" name="id_karyawan" value="{{old('id_karyawan')}}"><br>
Nama Karyawan <input type="input" name="nama_karyawan" value="{{old('nama_karyawan')}}"><br>
Alamat Karyawan <input type="input" name="alamat_karyawan" value="{{old('alamat_karyawan')}}"><br>
Telp Karyawan <input type="input" name="telp_karyawan" value="{{old('telp_karyawan')}}"><br>
Jenis Kelamin Karyawan <input type="input" name="jeniskel_karyawan" value="{{old('jeniskel_karyawan')}}"><br>
Jabatan Karyawan <input type="input" name="jabatan_karyawan" value="{{old('jabatan_karyawan')}}"><br>
Email Karyawan <input type="input" name="email_karyawan" value="{{old('email_karyawan')}}"><br>
Password Karyawan <input type="input" name="pass_karyawan" value="{{old('pass_karyawan')}}"><br>
<input type="submit" value="simpan">
</form>
</body>
</html>