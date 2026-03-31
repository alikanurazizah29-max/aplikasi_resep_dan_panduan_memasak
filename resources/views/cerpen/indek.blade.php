<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cerita yang mengandung unsur khayalan seperti kekuatan magis atau dunia imajinatif</h1>
    //@foreach ($dataAbsensi as $Absensi)
        <h2>Nama Absensi {{$Absensi->nama}}</h2>
        <h2>Tanggal Absensi {{$Absensi->tanggal}}</h2>
    @endforeach
</body>
</html>