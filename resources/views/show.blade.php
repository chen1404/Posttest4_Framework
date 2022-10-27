<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Tambah Data Saham</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">

    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

        

    <div class="container">
<h3><strong>LIHAT DATA</strong></h3>
<hr>
<br>
    <table class="table table-borderless">
    <tr>
    <td><h4>Kode Saham</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->Kode_Saham}}</h4></td>
    </tr>
    <tr>
    <td><h4>Nama</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->Nama}}</h4></td>
    </tr>
    <tr>
    <td><h4>Saham</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->Saham}}</h4></td>
    </tr>
    <tr>
    <td><h4>Papan Pencatatan</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->broker->papan_pencatatan}}</h4></td>
    </tr>
    <tr>
    <td><h4>Saham</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->Saham}}</h4></td>
    </tr>
    <tr>
    <td><h4>Frequency</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->broker->frequency}}</h4></td>
    </tr>
    <tr>
    <td><h4>Volume</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->broker->volume}}</h4></td>
    </tr>
    <tr>
    <td><h4>Value</h4></td>
    <td><h4>:</h4></td>
    <td><h4>{{$saham->broker->value}}</h4></td>
    </tr>
    </table>
    </div>
</body>
</html>