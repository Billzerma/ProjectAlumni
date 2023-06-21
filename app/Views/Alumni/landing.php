<?=$this->extend('Alumni/tamplate/header');?>

<?=$this->section('content');?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Link image caraousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>KOMPENI</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('Asset\alumniCSSJS\style.css');?>">
</head>

<body>

    <div class="containerBos">
        <div class="custom-div">
        </div>
    </div><br><br>

    <div class="marsoseContainer">
        <div class="row justify-content-center">
            <h1>Berita</h1>
            <div class="col">
                <div class="marsoseCard" style="width: 16rem;">
                    <img src="Asset\alumniCSSJS\gambar\bg\anime colorfull.png" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Berita 1</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="marsoseCard" style="width: 16rem;">
                    <img src="Asset\alumniCSSJS\gambar\bg\anime colorfull.png" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Berita 2</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="marsoseCard" style="width: 16rem;">
                    <img src="Asset\alumniCSSJS\gambar\bg\anime colorfull.png" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Berita 3</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</body>

</html>


<?=$this->endSection('content');?>
