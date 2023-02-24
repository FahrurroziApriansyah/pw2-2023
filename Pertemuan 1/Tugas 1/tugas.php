<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

$fruits = [
    [
        "name" => "Semangka",
        "warna" => "Hijau",
        "stok" => "12",
        "harga" => "20000",
        "deskripsi" => "buah dengan kandungan air yang tinggi",
    ],
    [
        "name" => "Pisang",
        "warna" => "Kuning",
        "stok" => "24",
        "harga" => "15000",
        "deskripsi" => "buah dengan kandungan yang kaya akan protein",
    ],
    [
        "name" => "Jeruk",
        "warna" => "Orange",
        "stok" => "6",
        "harga" => "10000",
        "deskripsi" => "buah dengan kandungan vitamin C tinggi",
    ],
    [
        "name" => "Durian",
        "warna" => "Hijau",
        "stok" => "3",
        "harga" => "50000",
        "deskripsi" => "buah dengan rasa yang manis dan aroma yang khas",
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Aneka Ragam Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
```
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar 
    Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
        
          $counter = 0;
          foreach ($fruits as $fruits) {
            echo "<tr>";
            $counter += 1;
            echo "<td>" . $counter . "</td>";
            foreach ($fruits as $detail) {
                echo "<td>" . $detail . "</td>";
            };
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>