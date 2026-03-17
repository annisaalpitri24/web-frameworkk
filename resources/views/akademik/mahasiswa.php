<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Daftar Mahasiwa</h1>
    <ol>
        <li><?= $mhs1 ?></li>
        <li><?= $mhs2 ?></li>
        <li>Bil Gates</li>
        <li>Linus</li>
        <li>Elon Musk</li>        
    </ol>
    <div>
        <p>Padang &copy; <?= date('Y') ?> </p>
          <img src="image/image.png" alt="Deskripsi gambar" width="300" height="200">
    </div>
</body>
</html>