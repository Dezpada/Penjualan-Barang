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
kode <input type="input" name="kodebrg" value="{{old('kodebrg')}}"><br>
nama <input type="input" name="namabrg" value="{{old('namabrg')}}"><br>
satuan <input type="input" name="satuan" value="{{old('satuan')}}"><br>
harga beli <input type="input" name="hargabeli" value="{{old('hargabeli')}}"><br>
harga jual <input type="input" name="hargajual" value="{{old('hargajual')}}"><br>
<input type="submit" value="simpan">
</form>
</body>
</html>