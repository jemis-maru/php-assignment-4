<?php

require_once 'vendor/autoload.php';
require_once 'DbConnection.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

$spreadsheet->getActiveSheet()->fromArray($data, null, 'A1');

$writer = new Xlsx($spreadsheet);
$writer->save('exported_product_data.xlsx');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="exported_product_data.xlsx"');
header('Cache-Control: max-age=0');

readfile("exported_product_data.xlsx");

unlink("exported_product_data.xlsx");

echo 'Data exported to Excel successfully.';

?>
