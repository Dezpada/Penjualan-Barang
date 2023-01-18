<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
<script type="text/javascript" src="{{asset('/assets/js/jquery.min.js')}}"></script>
</head>
<body>
@foreach($karyawan as $row)
<form action="" method="post">
{{csrf_field()}}
kode <input type="input" name="id_karyawan" required value="{{$row->id_karyawan}}"><br>
Nama Karyawan <input type="input" name="nama_karyawan" required value="{{$row->nama_karyawan}}"><br>
Alamat Karyawan <input type="input" name="alamat_karyawan" required value="{{$row->alamat_karyawan}}"><br>
Telp Karyawan <input type="input" name="telp_karyawan" required value="{{$row->telp_karyawan}}"><br>
Jenis Kelamin Karyawan <input type="input" name="jeniskel_karyawan" required value="{{$row->jeniskel_karyawan}}"><br>
Jabatan Karyawan <input type="input" name="jabatan_karyawan" required value="{{$row->jabatan_karyawan}}"><br>
Email Karyawan <input type="input" name="email_karyawan" required value="{{$row->email_karyawan}}"><br>
Password Karyawan <input type="input" name="pass_karyawan" required value="{{$row->pass_karyawan}}"><br>
<input type="submit" value="update">
</form>
@endforeach
</body>
</html>