<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Data Diri</h1>

    {{-- Nama : {{ $nama }} <br>
    Jenis Kelamin : {{ $jenis }} <br>
    Pendidikan Terakhir : {{ $pendidikan }} <br>
    Pekerjaan : {{ $pekerjaan }} <br> --}}
 <table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $nama }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ $jenis }}</td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>:</td>
        <td>{{ $pendidikan }}</td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>{{ $pendidikan }}</td>
    </tr>
    </table>

</body>
</html>