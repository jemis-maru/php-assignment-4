<?php

require_once 'vendor/autoload.php';
require_once 'DbConnection.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $file = $_FILES['file']['tmp_name'];

    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();

    $data = $sheet->toArray();

    foreach ($data as $row) {
      $name = $row['1'];
      $price = $row['2'];
      $image = $row['3'];
      $stock = $row['4'];
      $status = $row['5'];

      $studentQuery = "INSERT INTO products (name, price, image, stock, status) VALUES ('$name', '$price', '$image', '$stock', '$status')";
      $result = mysqli_query($conn, $studentQuery);
    }

    echo 'Data imported successfully.';
  } else {
    echo 'Error uploading file.';
  }
}

?>
