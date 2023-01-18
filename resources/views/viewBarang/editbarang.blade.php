<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
</head>

<body>
    @foreach ($barang as $row)
        <form action="" method="post">
            {{ csrf_field() }}
            kode <input type="input" name="kodebrg" required value="{{ $row->kodebrg }}"><br>
            nama <input type="input" name="namabrg" required value="{{ $row->namabrg }}"><br>
            satuan <input type="input" name="satuan" required value="{{ $row->satuan }}"><br>
            harga beli <input type="input" name="hargabeli" required value="{{ $row->hargabeli }}"><br>
            harga jual <input type="input" name="hargajual" required value="{{ $row->hargajual }}"><br>
            <input type="submit" value="update">
        </form>
    @endforeach
</body>

</html>
