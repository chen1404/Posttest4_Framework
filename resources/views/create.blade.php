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

        

    <div class="container mt">
        <form action="/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="Kode_Saham" class="form-label">Kode</label>

                <input type="text" class="form-control @error('Kode_Saham') is-invalid @enderror" id="Kode_Saham" name="Kode_Saham"
                    placeholder="Kode Saham" required>

                @error('Kode_Saham')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" name="Nama" placeholder="Nama Saham" required>
            @error('Nama')<div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="Saham" class="form-label">Saham</label>
                <input type="text" class="form-control @error('Saham') is-invalid @enderror" id="Saham" name="Saham" placeholder="Saham" required>

                @error('Saham')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Papan_Pencatatan" class="form-label">Papan Pencatatan</label>
                <input type="text" class="form-control @error('Papan_Pencatatan') is-invalid @enderror" id="Papan_Pencatatan" name="Papan_Pencatatan" placeholder="Papan Pencatatan" required>

                @error('Papan_Pencatatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Broker_Id" class="form-label">Volume</label>
                <select name="Broker_Id" id="Broker_Id" class="form-select @error('Broker_Id') is-invalid @enderror" aria-label="Default select example">
                    <option value="" selected disabled>Choose Volume</option>
                    @foreach ($brokers as $b)
                        <option value={{ $b->id }}>{{ $b->value }}</option>
                    @endforeach
                </select>

                @error('Broker_Id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </div>
</body>
</html>